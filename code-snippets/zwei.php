<?php
$str = 'foo   o';
$str = preg_replace('/\s+/', '_', $str);
// Das ist jetzt 'foo o'
echo $str;
?>
