<?php
require_once "vsalldia.php";
  header("Content-type: image/gif");
if ($max > 0){
  imagefilledrectangle($bild, $rand, $hoehe - $rand - baue($vs2), $breite - $rand, $hoehe - $rand, $red);
  imagerectangle($bild, $rand, $rand, $breite - $rand, $hoehe -$rand, $black);
}
  imagegif($bild);
  imagedestroy($bild);
$datab->close();
?>