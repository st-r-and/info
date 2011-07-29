<?php
$datab = new mysqli("localhost", "webuser", "web4all", "info");
if ($datab->connect_error) {
echo "Fehler bei der Verbindung: " . mysqli_connect_error();
exit();
}
date_default_timezone_set("Europe/Berlin");
if (date("H") < "7" || date("H") >= "23"){
$schicht = 1;
}else{
$schicht = 0;
}
?>