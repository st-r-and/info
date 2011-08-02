<?php
require_once "admin/daten.php";
if ($lesen = $datab->prepare("SELECT gesammt, gekommen FROM fahrten WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($gesammt, $gekommen);
  $lesen->fetch();
  $lesen->close();
}
$datab->close();
?>
<h2 class="box">Fahrten</h2>
<table>
  <tr><td class="bez">Gesamt: </td><td class="wert"><?php echo htmlspecialchars($gesammt); ?></td></tr>
  <tr><td class="bez">Gekommen: </td><td class="wert"><?php echo htmlspecialchars($gekommen); ?></td></tr>
</table>
<br />

