<title>Looping</title>
<p>Age </p>
<?php
$jsonobj = '{"Muslich":20,"Miya":18,"Mini":16}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>