<?php
//Include the file which contains the Image array
include "image_array.php";

//Select the index number of one random array entry
$randomImageNumber = array_rand($imageArray, 1);

//Print to the screen an HTML image element with attributes pulled from the randomly selected array entry
echo "<img src='" . $imageArray[$randomImageNumber]['address'] . "' alt='" . $imageArray[$randomImageNumber]['alt_text'] . "' />\n";
?>
