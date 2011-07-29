<?php
require_once "daten.php";
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

if (isset($_POST["eingang"]) || isset($_POST["abgang"]) || isset($_POST["gesammt"]) || isset($_POST["gekommen"]) || isset($_POST["vs1"]) || isset($_POST["vs2"]) || isset($_POST["vs3"]) || isset($_POST["vs4"]) || isset($_POST["vs5"]) || isset($_POST["bearb"])) {
  if (isset($_POST["eingang"]) || isset($_POST["abgang"])) {
    if($schr = $datab->prepare("UPDATE prognose SET eingang=?, abgang=? WHERE id=1")) {
      $eing = $_POST["eingang"];
      $abg = $_POST["abgang"];
      $schr->bind_param("ii", $eing, $abg);
      $schr->execute();
      $schr->close();
    }
  }
  if(isset($_POST["gesammt"]) || isset($_POST["gekommen"])){
    if($schr = $datab->prepare("UPDATE fahrten SET gesammt=?, gekommen=? WHERE id=1")) {
      $ges = $_POST["gesammt"];
      $gek = $_POST["gekommen"];
      $schr->bind_param("ii", $ges, $gek);
      $schr->execute();
      $schr->close();
      }
  }
  if (isset($_POST["vs1"]) || isset($_POST["vs2"]) || isset($_POST["vs3"]) || isset($_POST["vs4"]) || isset($_POST["vs5"])){
    if($schr = $datab->prepare("UPDATE stoerung SET vs1=?, vs2=?, vs3=?, vs4=?, vs5=? WHERE id=1")) {
      $vs01 = $_POST["vs1"];
      $vs02 = $_POST["vs2"];
      $vs03 = $_POST["vs3"];
      $vs04 = $_POST["vs4"];
      $vs05 = $_POST["vs5"];
      $schr->bind_param("iiiii", $vs01, $vs02, $vs03, $vs04, $vs05);
      $schr->execute();
      $schr->close();
    }
  }
  if (isset($_POST["bearb"])){
    if($schr = $datab->prepare("UPDATE durchsatz SET bearbeitete=? WHERE id=1")) {
      $bear = $_POST["bearb"];
      $schr->bind_param("i", $bear);
      $schr->execute();
      $schr->close();
    }
  }
  header("Location: back.php");
} else {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<!-- <meta http-equiv="refresh" content="5; URL=back.php"> -->
<title>Info-Back</title>
<style type="text/css">

   div { border:0px solid #888; }
#inf { position:absolute; width:29%; height:19%; left:20%; top:20%; text-align:center; }
#uhr { position:absolute; width:29%; height:20%; left:20%; top:0px; text-align:center; }
#pro { position:absolute; width:20%; height:39%; right:30%; top:0px; }
#bea { position:absolute; width:30%; height:39%; right:0%; top:0px; }
#fah { position:absolute; width:20%; height:99%; left:35px; top:0px; }
#sto { position:absolute; width:79%; height:60%; right:0px; bottom:0px; text-align:center;}
#vs1 { position:absolute; bottom:0px; height:80%; width:20%; left:0%;}
#vs2 { position:absolute; bottom:0px; height:80%; width:20%; left:20%;}
#vs3 { position:absolute; bottom:0px; height:80%; width:20%; left:40%;}
#vs4 { position:absolute; bottom:0px; height:80%; width:20%; left:60%;}
#vs5 { position:absolute; bottom:0px; height:80%; width:20%; left:80%;}
#send {position:absolute; bottom:10px; right:10px;}
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
<h1>Dateneingabe Halleninformation Infocenter</h1>
</div>
<div id="uhr">
<h1 id="time"></h1>
</div>
<div id="pro">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<h2>Prognose</h2>
<table>
<tr><td><h3>Abgang</h3></td><td><input type="text" name="abgang" size="8" value="<?php echo htmlspecialchars($abgang) ?>" /></td></tr>
<tr><td><h3>Eingang</h3></td><td><input type="text" name="eingang" size="8" value="<?php echo htmlspecialchars($eingang) ?>" /></td></tr>
</table>
</div>
<div id="bea">
<h2> bearbeitete <br />
Sendungen</h2>
<input type="text" name="bearb" size="8" value="<?php echo htmlspecialchars($bearb) ?>" />
</div>
<div id="fah">
<h2>Fahrten</h2>
aktuelle Schicht<br />
<table>
<tr><td><h3>Sollfahrten</h3></td><td><input type="text" name="gesammt" size="3" value="<?php echo htmlspecialchars($gesammt) ?>" /></td></tr>
<tr><td><h3>Istfahrten</h3></td><td><input type="text" name="gekommen" size="3" value="<?php echo htmlspecialchars($gekommen) ?>" /></td></tr>
</table>
</div>
<div id="sto">
<h2>Vorsorterstoerung</h2>
<div id="vs1"><h3>VS1</h3>
<input type="text" name="vs1" size="3" value="<?php echo htmlspecialchars($vs1) ?>" />
</div>
<div id="vs2"><h3>VS2</h3>
<input type="text" name="vs2" size="3" value="<?php echo htmlspecialchars($vs2) ?>" />
</div>
<div id="vs3"><h3>VS3</h3>
<input type="text" name="vs3" size="3" value="<?php echo htmlspecialchars($vs3) ?>" />
</div>
<div id="vs4"><h3>VS4</h3>
<input type="text" name="vs4" size="3" value="<?php echo htmlspecialchars($vs4) ?>" />
</div>
<div id="vs5"><h3>VS5</h3>
<input type="text" name="vs5" size="3" value="<?php echo htmlspecialchars($vs5) ?>" />
</div>
</div>
<div id="send">
<input type="submit" />
</div>
</form>
</body>
</head>
<?php
}
$datab->close();
?>