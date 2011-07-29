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
  $hoehe = 365;
  $breite = 100;
  $rand = 25;
  $bild = imagecreatetruecolor($breite, $hoehe);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  imagegif($bild);
  imagedestroy($bild);

?>