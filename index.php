<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPEN EYES | Portfolio</title>
    <link rel="stylesheet" href ="style.css">
    <link rel="stylesheet" href="js/node_modules/glightbox/src/postcss/glightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

<body>

    <div class="header">
    <div class="header-content">
        
        <?php
        include 'navigation.html';
        ?>
    </div>
    </div>


<div class="gallery" id="gallery">
    <?php $dir = 'gallery-images/';
                $files = glob( $dir . '*.png');
                foreach( $files as $file) {
                    echo '
                   
                    <div class="gallery-item" id="lightgallery">
                    
                        <a href="'.$file.'" ><img src="' . $file . '" class="item">
                 
                    </div>';
                    
                    
                    
                } 
        ?> 
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       
        lightGallery(document.getElementById('gallery'), {
            selector: '.item'
        })

    </script>
</html>