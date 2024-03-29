<?php
require_once 'CommonTools.php';

session_start();

$pageTitle = "Image Upload with Ajax and PHP";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $pageTitle; ?></title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div id="upload-container" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <input id="file-input" type="file" multiple accept="image/*" />
                    <label>Drag & Drop images here or click on upload button</label>
                    <div>
                        <button id="upload-button" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <h2 class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    Gallery
                </h2>
            </div>
            
            <div id="gallery-container" class="row">
                <?php CommonTools::REFRESH_GALLERY(); ?>
            </div>
        </main>
        
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>
