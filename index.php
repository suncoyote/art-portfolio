<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPEN EYES</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body>
    <?php 
        include 'navigation.html'; 

    ?>


<div class="gallery">
    <?php $dir = 'gallery-images/';
                $files = glob( $dir . '*.png');
                foreach( $files as $file) {
                    echo '
                    <div class="gallery-item"> 
                        <img src="' . $file . '">
                    </div>';
                    
                    
                } 
        ?> 
</div>
</body>
</html>