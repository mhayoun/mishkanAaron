<?php
$data = $_POST['jsonString'];
//set mode of file to writable.
chmod("../data.json",0777);
$f = fopen("../data.json", "w+") or die("fopen failed");
fwrite($f, $data);
fclose($f);
?>