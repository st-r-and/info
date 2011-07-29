<?php
require_once "admin/daten.php";
 if ($lesen = $datab->prepare("SELECT eingang, abgang FROM prognose WHERE id=1")) {
    $lesen->execute();
    $lesen->bind_result($eingang, $abgang);
    $lesen->fetch();
    $lesen->close();
  }
if ($lesen = $datab->prepare("SELECT bearbeitete FROM durchsatz WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($bearb);
  $lesen->fetch();
  $lesen->close();
}
header("Content-type: image/gif");
if ($schicht){
  $prog = $eingang;
}else{
  $prog = $abgang;
}
  $hoehe = 365;
  $breite = 100;
  $rand = 25;
if ($prog > $bearb){
  $max = $prog;
} else {
  $max = $bearb;
}
$pproz = 100 / $max * $prog; 
$bproz = 100 / $max * $bearb;
$paus = ($hoehe - 2 * $rand ) / 100 * $pproz;
$baus = ($hoehe - 2 * $rand ) / 100 * $bproz;
  $bild = imagecreatetruecolor($breite, $hoehe);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $black = imagecolorallocate($bild, 0,   0,   0);
  $red   = imagecolorallocate($bild, 255,   0,   0);
if ($prog > 0) {
  imagefilledrectangle($bild, $rand-10, $hoehe-$rand-$paus, $breite - $rand+10, $hoehe -$rand, $black);
  imagefilledrectangle($bild, $rand, $hoehe-$rand-$baus, $breite - $rand, $hoehe - $rand, $red);
}
  imagegif($bild);
  imagedestroy($bild);

?>