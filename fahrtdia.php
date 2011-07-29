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
  $gro = 400;
  $bild = imagecreatetruecolor($gro, $gro);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $red   = imagecolorallocate($bild, 255,   0,   0);
if ($winkel > 0 && $gesammt > 0) imagefilledarc($bild, $gro/2, $gro/2, $gro-10, $gro-10,  180, 180 + $winkel, $red, IMG_ARC_PIE);
  imagegif($bild);
  imagedestroy($bild);
$datab->close();
?>
