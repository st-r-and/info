<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel_reader2.php';

echo "Hallo Datei hochladen";
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" 
enctype="multipart/form-data">
Datei: <br />
<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
<input type="file" name="datei" /><br />
<input type="submit" value="Hochladen" />
</form>
<?php
  /*if (isset($_FILES["datei"])) {
  foreach ($_FILES["datei"] as $k => $v) {
    echo "$k: $v <br />\n";
  }
  }*/

if (isset($_FILES["datei"]) AND ! $_FILES["datei"]["error"]){
  $data = new Spreadsheet_Excel_Reader($_FILES["datei"]["tmp_name"]);
  echo $data->val(1,'A',$sheet=1)."<br />";
  echo "Abgang"."  "."Eingang"."<br />";
  echo $data->raw(12,'A',$sheet=1)."  ".$data->raw(12,'E',$sheet=1)."<br />";
  echo $data->raw(24,'A',$sheet=1)."  ".$data->raw(24,'E',$sheet=1)."<br />";
  echo $data->raw(38,'A',$sheet=1)."  ".$data->raw(38,'E',$sheet=1)."<br />";
  echo $data->raw(48,'A',$sheet=1)."  ".$data->raw(48,'E',$sheet=1)."<br />";
  echo $data->raw(59,'A',$sheet=1)."  ".$data->raw(59,'E',$sheet=1)."<br />";
  echo $data->raw(70,'A',$sheet=1)."  ".$data->raw(70,'E',$sheet=1)."<br />";
  echo $data->raw(82,'A',$sheet=1)."  ".$data->raw(82,'E',$sheet=1)."<br />";
  echo $data->raw(94,'A',$sheet=1)."  ".$data->raw(94,'E',$sheet=1)."<br />";
  echo $data->raw(109,'A',$sheet=1)."  ".$data->raw(109,'E',$sheet=1)."<br />";
  echo $data->raw(119,'A',$sheet=1)."  ".$data->raw(119,'E',$sheet=1)."<br />";

  /*  $filename = basename($_FILES["datei"]["name"]);
  $filename = preg_replace('/\s+/', '_', $filename);
  if (move_uploaded_file($_FILES["datei"]["tmp_name"], "upload/".
			  $filename )){
    echo "Dateiupload hat geklappt";
  } else {
    echo "Dateiupload hat nicht geklappt";
    }*/
}
?>
