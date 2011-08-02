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
?>
<h2 class="box">Prognose</h2>
<table>
  <tr><td class="bez">Abgang: </td><td class="wert"><?php echo htmlspecialchars($abgang); ?></td></tr>
  <tr><td class="bez">Eingang: </td><td class="wert"><?php echo htmlspecialchars($eingang); ?></td></tr>
  <tr><td class="bez">Bearbeitet: </td><td class="wert"><?php echo htmlspecialchars($bearb);?></td></tr>
</table>
