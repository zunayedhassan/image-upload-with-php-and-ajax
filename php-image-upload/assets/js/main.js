"use strict";

(function main() {
    
    let uploadContainer = document.querySelector("#upload-container");
    let fileInput       = document.querySelector("#file-input");
    let uploadButton    = document.querySelector("#upload-button");
    let gallery         = document.querySelector("#gallery-container");
    
    uploadContainer.addEventListener("drop", event => {
        uploadContainer.classList.remove("dragover");
        
        let dataTransfer = event.dataTransfer;
        let files = dataTransfer.files;
        
        HandleFiles(files);
        
        event.preventDefault();
    });
    
    uploadContainer.addEventListener("dragover", event =>{
        uploadContainer.classList.add("dragover");
        
        event.preventDefault();
    });
    
    uploadContainer.addEventListener("dragleave", event =>{
        uploadContainer.classList.remove("dragover");
        
        event.preventDefault();
    });
    
    uploadButton.addEventListener("click", event => {
        fileInput.click();
    });
    
    fileInput.addEventListener("change", event => {
        let files = event.target.files;
        HandleFiles(files);
    });
    
    function HandleFiles(files) {
        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            UploadFile(file);
        }
    }
    
    function UploadFile(file) {
        var url      = "upload.php";
        var xhr      = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('file', file);

        xhr.addEventListener('readystatechange', function(e) {
            // Done. Inform the user
            if ((xhr.readyState === 4) && (xhr.status === 200)) {
                let response = e.currentTarget.responseText;
                
                gallery.innerHTML = response;
            }
            // Error. Inform the user
            else if ((xhr.readyState === 4) && xhr.status !== 200) {
                console.log("error");
            }
        });

        xhr.open('POST', url, true);
        xhr.send(formData);
    }
    
    
}) ();