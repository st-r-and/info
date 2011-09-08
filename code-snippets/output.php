<?php
$datab = new mysqli("localhost", "webuser", "web4all", "test");
?>
<html>
<head>
<title>Zeitstempel testen</title>
</head>
<body>
<?php
 /*
if ($lesen = $datab->prepare("SELECT stempel, wert FROM zeit ORDER BY stempel DESC")) {
  $lesen->execute();
  $lesen->bind_result($stempel, $wert);
  echo "<table>\n";
  while($lesen->fetch()) {
    echo "<tr>\n\t<td>"
      . htmlspecialchars($stempel)
      . "</td>\n\t<td>"
      . htmlspecialchars($wert)
      . "</td>\n</tr>\n";
  }
  echo "</table>";
  $lesen->close();
}
*/
if ($lesen = $datab->prepare("SELECT stempel, wert FROM zeit ORDER BY stempel DESC LIMIT 1")) {
  $lesen->execute();
  $lesen->bind_result($stempel, $wert);
  $lesen->fetch();
  $lesen->close();
}

echo $stempel . "<br />";
echo strlen($stempel);

?>
</body>
</html>
<?php

$datab->close();
?>