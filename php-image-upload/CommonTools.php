<?php
class CommonTools {
    static function IS_STARTS_WITH($haystack, $needle) {
        $length = strlen($needle);
        
        return (substr($haystack, 0, $length) === $needle);
    }

    static function IS_ENDS_WITH($haystack, $needle) {
       $length = strlen($needle);
       
       if ($length == 0) {
           return true;
       }

       return (substr($haystack, -$length) === $needle);
    }
    
    static function REFRESH_GALLERY() {
        $dir = "../uploads/";
        $files = scandir($dir);

        for ($i = 0; $i < count($files); $i++) {
            $fileName = $files[$i];
            $file     = $dir . $fileName;

            if (CommonTools::IS_ENDS_WITH($fileName, ".jpg") || CommonTools::IS_ENDS_WITH($fileName, ".jpeg") || CommonTools::IS_ENDS_WITH($fileName, ".png") || CommonTools::IS_ENDS_WITH($fileName, ".gif")) {
                ?>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <img src="<?= $file; ?>" alt="<?= $fileName; ?>" class="img-thumbnail" />
                </div>

                <?php
            }
        }
    }
}
