<title>Looping</title>
<p>Age </p>
<?php
$jsonobj = '{"Muslich":20,"Miya":18,"Mini":16}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>