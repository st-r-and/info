<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Prognose</title>
</head>
<body>
<h1>Prognose</h1>
<table>
<tr><th>Datum </th><th>Abgang</th><th>Eingang</th></tr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
   <tr><td><input type="text" name="dat" /></td><td><input type="text" name="abg" /></td><td><input type="text" name="eing" /></td></tr>
</form>
</table>
</body>
</html>