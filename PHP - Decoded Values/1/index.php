<title>Decoded Values</title>
<p>Age </p>
<?php
$jsonobj = '{"Muslich":20,"Miya":18,"Mini":16}';

$obj = json_decode($jsonobj);

echo $obj->Muslich;
echo $obj->Miya;
echo $obj->Mini;
?>