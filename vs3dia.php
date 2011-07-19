<?php
  require_once "admin/daten.php";
  if ($lesen = $datab->prepare("SELECT vs1, vs2, vs3, vs4, vs5 FROM stoerung WHERE id=1")) {
      $lesen->execute();
      $lesen->bind_result($vs1, $vs2, $vs3, $vs4, $vs5);
      $lesen->fetch();
      $lesen->close();
  }
  header("Content-type: image/gif");
  $max = $vs1;
  if($vs2 > $max) $max = $vs2;
  if($vs3 > $max) $max = $vs3;
  if($vs4 > $max) $max = $vs4;
  if($vs5 > $max) $max = $vs5;
  $prozent = 100 / $max * $vs3;
  $hoehe = 400;
  $breite = 100;
  $rand = 25;
  $aussl = ( $hoehe - 2 * $rand ) / 100 * $prozent;
  $bild = imagecreatetruecolor($breite, $hoehe);
  $farbe_hintergrund = imagecolorexact($bild, 255, 204, 102);
  imagefill($bild, 0, 0, $farbe_hintergrund);
  $black = imagecolorallocate($bild, 0,   0,   0);
  $red   = imagecolorallocate($bild, 255,   0,   0);
  imagefilledrectangle($bild, $rand, $hoehe - $rand - $aussl, $breite - $rand, $hoehe - $rand, $red);
  imagerectangle($bild, $rand, $rand, $breite - $rand, $hoehe -$rand, $black);
  imagegif($bild);
  imagedestroy($bild);
?>