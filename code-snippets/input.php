<?php
$datab = new mysqli("localhost", "webuser", "web4all", "test");
if (empty($_POST["nummer"])) {
?>
<html>
<head>
<title>Zeitstempel testen</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nummer: <input type="text" name="nummer" maxlength="11" /><br />
    <input type="submit" />
    </form>
</body>
</html>
<?php
    } else {
  if ($schr = $datab->prepare("INSERT INTO zeit (wert) VALUES (?)")) {
    $nummer = $_POST["nummer"];
    $schr->bind_param("i", $nummer);
    $schr->execute();
    $schr->close();
  }
  header("Location: input.php");
}
$datab->close();
?>