<?php
  require_once "admin/daten.php";
  if ($lesen = $datab->prepare("SELECT gesammt, gekommen FROM fahrten WHERE id=1")) {
    $lesen->execute();
    $lesen->bind_result($gesammt, $gekommen);
    $lesen->fetch();
    $lesen->close();
  }
function farbverl($grad){
  $far = 510/100 * $grad;
  if($far<=255) $code = array(255,$far,0);
  if($far>255) $code = array(255-($far-255),255,0);
  return $code;
}
  $prozent = 100 / htmlspecialchars($gesammt) * htmlspecialchars($gekommen);
  $winkel = 360 / 100 * $prozent;
$farb=farbverl($prozent);
  header("Content-type: image/gif");
  $gro = 400;
  $bild = imagecreatetruecolor($gro, $gro);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $red   = imagecolorallocate($bild, $farb[0],   $farb[1],   $farb[2]);
if ($winkel > 0 && $gesammt > 0) imagefilledarc($bild, $gro/2, $gro/2, $gro-10, $gro-10,  180, 180 + $winkel, $red, IMG_ARC_PIE);
  imagegif($bild);
  imagedestroy($bild);
$datab->close();
?>
