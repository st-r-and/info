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
#inf { position:absolute; width:29%; height:19%; left:30%; top:20%; }
#uhr { position:absolute; width:29%; height:20%; left:30%; top:0px; text-align:center; font-size:200%; }
#pro { position:absolute; width:30%; height:39%; right:0px; top:0px; }
#fah { position:absolute; width:20%; height:99%; left:35px; top:0px; }
#sto { position:absolute; width:79%; height:60%; right:0px; bottom:0px; text-align:center;}
#vs1 { position:absolute; bottom:0px; height:80%; width:20%; left:0%;}
#vs2 { position:absolute; bottom:0px; height:80%; width:20%; left:20%;}
#vs3 { position:absolute; bottom:0px; height:80%; width:20%; left:40%;}
#vs4 { position:absolute; bottom:0px; height:80%; width:20%; left:60%;}
#vs5 { position:absolute; bottom:0px; height:80%; width:20%; left:80%;}
.box { text-align:center; font-size:220%; }
.bez { font-size:200%; }
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
</table>
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
  <span class="wert"> <?php echo htmlspecialchars($vs1); ?> </span>
  <img src='<?php echo vs1dia.php; ?>' alt=' ' />
</div>
<div id="vs2"><span class="bez">VS 2</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs2); ?> </span>
  <img src='<?php echo vs2dia.php; ?>' alt=' ' />
</div>
<div id="vs3"><span class="bez">VS 3</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs3); ?> </span>
  <img src='<?php echo vs3dia.php; ?>' alt=' ' />
</div>
<div id="vs4"><span class="bez">VS 4</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs3); ?> </span>
  <img src='<?php echo vs4dia.php; ?>' alt=' ' />
</div>
<div id="vs5"><span class="bez">VS 5</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs3); ?> </span>
  <img src='<?php echo vs5dia.php; ?>' alt=' ' />
</div>
</div>
</body>
</head>
