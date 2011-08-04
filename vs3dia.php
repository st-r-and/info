<?php
require_once "vsalldia.php";
header("Content-type: image/gif");
baue($vs3);
imagegif($bild);
imagedestroy($bild);
$datab->close();
?>
