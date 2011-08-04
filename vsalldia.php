<?php
require_once "admin/daten.php";
  if ($lesen = $datab->prepare("SELECT vs1, vs2, vs3, vs4, vs5 FROM stoerung WHERE id=1")) {
      $lesen->execute();
      $lesen->bind_result($vs1, $vs2, $vs3, $vs4, $vs5);
      $lesen->fetch();
      $lesen->close();
  }
 $max = $vs1;
  if($vs2 > $max) $max = $vs2;
  if($vs3 > $max) $max = $vs3;
  if($vs4 > $max) $max = $vs4;
  if($vs5 > $max) $max = $vs5;
  $hoehe = 365;
  $breite = 100;
  $rand = 25;
  $bild = imagecreatetruecolor($breite, $hoehe);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $black = imagecolorallocate($bild, 0,   0,   0);
  $red   = imagecolorallocate($bild, 255,   0,   0);
function baue($vs){
    $prozent = 100 / $max * $vs;
    return ( $hoehe - 2 * $rand ) / 100 * $prozent;
}
?>