<?php
  require_once "admin/daten.php";
  if ($lesen = $datab->prepare("SELECT gesammt, gekommen FROM fahrten WHERE id=1")) {
    $lesen->execute();
    $lesen->bind_result($gesammt, $gekommen);
    $lesen->fetch();
    $lesen->close();
  }
  $prozent = 100 / htmlspecialchars($gesammt) * htmlspecialchars($gekommen);
  $winkel = 360 / 100 * $prozent;
  header("Content-type: image/gif");
  $bild = imagecreatetruecolor(500, 500);
  $farbe_hintergrund = imagecolorexact($bild, 255, 255, 255);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $red   = imagecolorallocate($bild, 255,   0,   0);
  imagefilledarc($bild, 250, 250, 400, 400,  180, 180 + $winkel, $red, IMG_ARC_PIE);
  imagegif($bild);
  imagedestroy($bild);
?>
