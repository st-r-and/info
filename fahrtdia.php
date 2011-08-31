<?php
  require_once "admin/daten.php";
  if ($lesen = $datab->prepare("SELECT gesammt, gekommen FROM fahrten WHERE id=1")) {
    $lesen->execute();
    $lesen->bind_result($gesammt, $gekommen);
    $lesen->fetch();
    $lesen->close();
  }
function farbverl($grad){
  $far = 255/100 * $grad;
  $code = array(255-$far,$far,0);
  return $code;
}

  header("Content-type: image/gif");
  $gro = 330;
  $bild = imagecreatetruecolor($gro, $gro);
  $farbe_hintergrund = imagecolorexact($bild, 255, 255, 255);
  imagefill($bild, 0, 0, $farbe_hintergrund);
if ($gekommen > 0 && $gesammt > 0){ 
  $prozent = 100 / htmlspecialchars($gesammt) * htmlspecialchars($gekommen);
  $farb=farbverl($prozent);
  $red   = imagecolorallocate($bild, $farb[0],   $farb[1],   $farb[2]);
  $winkel = 360 / 100 * $prozent;
  imagefilledarc($bild, $gro/2, $gro/2, $gro, $gro,  180, 180 + $winkel, $red, IMG_ARC_PIE);
}
  imagegif($bild);
  imagedestroy($bild);
$datab->close();
?>
