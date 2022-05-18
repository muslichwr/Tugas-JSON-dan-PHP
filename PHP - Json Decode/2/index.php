<title>json_decode 2</title>
<p>Age </p>
<?php
$jsonobj = '{"Muslich":20,"Miya":18,"Mini":16}';

var_dump(json_decode($jsonobj, true));
?>