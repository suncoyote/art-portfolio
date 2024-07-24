<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPEN EYES | Product Design</title>
    <link rel="stylesheet" href ="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/justifiedGallery.css" /> 
    </head>


<body>

    <div class="header-content-wrapper">

        
        <?php
        include 'navigation.html';
        ?>


    <div class="content">
        <h1>Product Design</h1>
            <p>
                This is a portfolio of the work I have made alongside manufacturers over the years. I am passionate about not just putting my artwork on an object, but tailoring the design to the medium itself to showcase each unique set of materials and create something beautiful that can stand on its own as a singular item. </p>
            <p>
                If you're interested in purchasing products, please see <a href="https://shop.aspeney.es">my online shop</a> for what I have available at the moment!</p>
    </div>
    <div class="gallery" id="gallery">
        <?php $dir = 'product-images/';
            $files = glob( $dir . '*.png');
            foreach( $files as $file) {
                echo '
                        
                    <a href="'.$file.'" class="item"><img src="' . $file . '" ></a>
                        
                        ';
                            
            } 
        ?> 
    </div>

    </div>

    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="js/jquery.justifiedGallery.js"></script>

    <script src="js/script.js"></script>
</body>
<div class="footer">
    <?php include('footer.html')?>
</div>

</html>