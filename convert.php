<?php
  $file = "images/test.png";
  $image = imagecreatefrompng($file);
  $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
  
  //maintain transparency
  
  imagesavealpha($bg, true);
  imagefill($bg, 0, 0, imagecolorallocatealpha($bg, 0, 0, 0, 127));
  imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
  imagedestroy($image);
  $quality = 100;
  
  //save image in same folder
  imagewebp($bg,'images/'.strtok(basename($arquivo), '.').'.webp');
  imagedestroy($bg);


?>
