<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPEN EYES</title>
</head>
<body>
    <?php 
        include 'navigation.html'; 

    ?>



<?php $dir = 'gallery-images/';
        $files = glob( $dir . '*.png');
        foreach( $files as $file) {
            $filename = pathinfo( $file, PATHINFO_FILENAME);
            $description = file_exists( $filename.'txt') ? file_get_contents( $filename.'txt') : '';
            echo '<div class="artwork"><img src="' . $file . '">'.$description.'</div>';
            
            
        } 
?> 
</body>
</html>