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
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta http-equiv="refresh" content="5; URL=index.php">
<title>Info-Front</title>
<style type="text/css">
  body { background-color:#FFCC66;}
div { border:0px solid #888; }
#inf { position:absolute; width:29%; height:19%; left:20%; top:20%; text-align:center; }
#uhr { position:absolute; width:29%; height:20%; left:20%; top:0px; text-align:center; font-size:200%; }
#pro { position:absolute; width:40%; height:39%; right:0px; top:0px; }
<<<<<<< HEAD
#fah { position:absolute; width:20%; height:99%; left:35px; top:0px; }
=======
#fah { position:absolute; width:20%; height:99%; left:5px; top:0px; }
>>>>>>> 4fca31ad6f4fde9ffd1008fbc323e23d57e99d78
#sto { position:absolute; width:79%; height:60%; right:0px; bottom:0px; text-align:center;}
#vs1 { position:absolute; bottom:0px; height:80%; width:20%; left:0%;}
#vs2 { position:absolute; bottom:0px; height:80%; width:20%; left:20%;}
#vs3 { position:absolute; bottom:0px; height:80%; width:20%; left:40%;}
#vs4 { position:absolute; bottom:0px; height:80%; width:20%; left:60%;}
#vs5 { position:absolute; bottom:0px; height:80%; width:20%; left:80%;}
.box { text-align:center; }
.bez { font-size:150%; }
.wert { font-size:400%; text-align:right;}
</style>
<script type="text/javascript">
<!--
  function start() {
  time();
  window.setInterval("time()", 1000);
}

function time() {
  var now = new Date();
  hours = now.getHours();
  minutes = now.getMinutes();
  seconds = now.getSeconds();

  thetime = (hours < 10) ? "0" + hours + ":" : hours + ":";
  thetime += (minutes < 10) ? "0" + minutes + ":" : minutes + ":";
  thetime += (seconds < 10) ? "0" + seconds : seconds;

  element = document.getElementById("time");
  element.innerHTML = thetime;
}

//-->
</script>
</head>
<body onload="start();">
<div id="inf">
<h1>INFO</h1>
</div>
<div id="uhr">
<h1 id="time"></h1>
</div>
<div id="pro">
<h2>Prognose</h2>
<table>
  <tr><td class="bez">Abgang</td><td class="wert"><?php echo htmlspecialchars($abgang); ?></td></tr>
  <tr><td class="bez">Eingang</td><td class="wert"><?php echo htmlspecialchars($eingang); ?></td></tr>
</table>
</div>
<div id="fah">
<h2 class="box">Fahrten</h2>
<table>
  <tr><td class="bez">gesammt</td><td class="wert"><?php echo htmlspecialchars($gesammt); ?></td></tr>
  <tr><td class="bez">gekommen</td><td class="wert"><?php echo htmlspecialchars($gekommen); ?></td></tr>
</table>
<img src='fahrtdia.php' alt=' ' />
</div>
<div id="sto">
<h2>Vorsorterstoerung</h2>
<div id="vs1"><h3>VS1</h3>
  <?php echo "<h1>" . htmlspecialchars($vs1) . "</h1>\n";
  echo "<img src='vs1dia.php' alt=' ' />\n";
?>
</div>
<div id="vs2"><h3>VS2</h3>
  <?php echo "<h1>" . htmlspecialchars($vs2) . "</h1>\n";
  echo "<img src='vs2dia.php' alt=' ' />\n";
 ?>
</div>
<div id="vs3"><h3>VS3</h3>
  <?php echo "<h1>" . htmlspecialchars($vs3) . "</h1>\n";
  echo "<img src='vs3dia.php' alt=' ' />\n";
?>
</div>
<div id="vs4"><h3>VS4</h3>
  <?php echo "<h1>" . htmlspecialchars($vs4) . "</h1>\n";
  echo "<img src='vs4dia.php' alt=' ' />\n";
?>
</div>
<div id="vs5"><h3>VS5</h3>
  <?php echo "<h1>" . htmlspecialchars($vs5) . "</h1>\n";
  echo "<img src='vs5dia.php' alt=' ' />\n";
?>
</div>
</div>
</body>
</head>
