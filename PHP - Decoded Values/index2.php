<title>Decoded Values 2</title>
<p>Age </p>
<?php
$jsonobj = '{"Muslich":20,"Miya":18,"Mini":16}';

$arr = json_decode($jsonobj, true);

echo $arr["Muslich"];
echo $arr["Miya"];
echo $arr["Mini"];
?>