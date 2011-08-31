<?php
require_once "admin/daten.php";

if ($lesen = $datab->prepare("SELECT vs1, vs2, vs3, vs4, vs5 FROM stoerung WHERE id=1")) {
  $lesen->execute();
  $lesen->bind_result($vs1, $vs2, $vs3, $vs4, $vs5);
  $lesen->fetch();
  $lesen->close();
}

?>

<div id="vs1"><span class="bez">VS 1</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs1); ?> </span><br />
</div>
<div id="vs2"><span class="bez">VS 2</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs2); ?> </span><br />
</div>
<div id="vs3"><span class="bez">VS 3</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs3); ?> </span><br />
</div>
<div id="vs4"><span class="bez">VS 4</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs4); ?> </span><br />
</div>
<div id="vs5"><span class="bez">VS 5</span><br/>
  <span class="wert"> <?php echo htmlspecialchars($vs5); ?> </span><br />
</div>
<?php
  $datab->close();
?>