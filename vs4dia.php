<?php
require_once "vsalldia.php";
header("Content-type: image/gif");
baue($vs4);
imagegif($bild);
imagedestroy($bild);
$datab->close();
?>
