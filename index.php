<?php
require_once "admin/daten.php";
if ($lesen = $datab->prepare("SELECT eingang, abgang FROM prognose WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($eingang, $abgang);
  $lesen->fetch();
  $lesen->close();
}
if ($lesen = $datab->prepare("SELECT gesammt, gekommen FROM fahrten WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($gesammt, $gekommen);
  $lesen->fetch();
  $lesen->close();
}
if ($lesen = $datab->prepare("SELECT vs1, vs2, vs3, vs4, vs5 FROM stoerung WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($vs1, $vs2, $vs3, $vs4, $vs5);
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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta http-equiv="refresh" content="5; URL=index.php">
<title>Info-Front</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<script type="text/javascript" src="./basic.js"></script>
</head>
<body onload="start();">
<div id="inf">
<h1 class="box">Halleninformation</h1>
</div>
<div id="uhr">
<h1 id="time"></h1>
</div>
<div id="pro">
<h2 class="box">Prognose</h2>
<table>
  <tr><td class="bez">Abgang: </td><td class="wert"><?php echo htmlspecialchars($abgang); ?></td></tr>
  <tr><td class="bez">Eingang: </td><td class="wert"><?php echo htmlspecialchars($eingang); ?></td></tr>
  <tr><td class="bez">Bearbeitet: </td><td class="wert"><?php echo htmlspecialchars($bearb);?></td></tr>
</table>
</div>
<div id="pdi">
<img src='durchsdia.php' alt='' />
</div>
<div id="fah">
<h2 class="box">Fahrten</h2>
<table>
  <tr><td class="bez">Gesamt: </td><td class="wert"><?php echo htmlspecialchars($gesammt); ?></td></tr>
  <tr><td class="bez">Gekommen: </td><td class="wert"><?php echo htmlspecialchars($gekommen); ?></td></tr>
</table>
<br />
<img src='fahrtdia.php' alt=' ' />
</div>
<div id="sto">
  <h2 class="box">Vorsorterst&oumlrung</h2>
<div id="vs1"><span class="bez">VS 1</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs1); ?> </span><br />
  <img src='vs1dia.php' alt=' ' />
</div>
<div id="vs2"><span class="bez">VS 2</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs2); ?> </span><br />
  <img src='vs2dia.php' alt=' ' />
</div>
<div id="vs3"><span class="bez">VS 3</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs3); ?> </span><br />
  <img src='vs3dia.php' alt=' ' />
</div>
<div id="vs4"><span class="bez">VS 4</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs4); ?> </span><br />
  <img src='vs4dia.php' alt=' ' />
</div>
<div id="vs5"><span class="bez">VS 5</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs5); ?> </span><br />
  <img src='vs5dia.php' alt=' ' />
</div>
</div>
</body>
</head>
<?php
  $datab->close();
?>