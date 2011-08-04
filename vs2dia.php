<?php
require_once "vsalldia.php";
header("Content-type: image/gif");
baue($vs2);
imagegif($bild);
imagedestroy($bild);
$datab->close();
?>
