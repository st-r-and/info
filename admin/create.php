<?php
$datab = new mysqli("localhost", "webuser", "web4all", "info");
if ($datab->connect_error) {
echo "Fehler bei der Verbindung: " . mysqli_connect_error();
exit();
}
$create = "CREATE TABLE IF NOT EXISTS `durchsatz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date DEFAULT '0000-00-00',
  `time` time DEFAULT '00:00:00',
  `bearbeitete` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2";

$insert = "INSERT INTO `durchsatz` (`id`, `datum`, `time`, `bearbeitete`) VALUES
(1, '0000-00-00', '00:00:00', 0)";

$datab->query($create);
$datab->query($insert);

$datab->close();
?>