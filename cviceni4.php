

<?php

$castkaBezDPH = 149.99;
$DPH = 21;
$castkaSDPH = $castkaBezDPH * ($DPH/100 + 1);

echo "Castka bez DPH: $castkaBezDPH<br>DPH: $DPH %<br>Castka s DPH:$castkaSDPH";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>




<?php

$arrayExample = ['modra','zelena','ruzova'];
var_dump($arrayExample);
echo '<br>';
$arrayExample2 = ['barva' => 'modra','znacka' => 'ruzova'];
var_dump($arrayExample2);
echo '<br>';
$arrayExample3 = ['barva' => 'modra','znacka' => 'ruzova', 'pocet' => 2, 'prodane' => false];
var_dump($arrayExample3);
echo '<br>';
var_dump($arrayExample3['prodane']);
echo '<br>';
$arrayExample3['barva']='ruzova';
var_dump($arrayExample3);
echo '<br>';
$arrayExample3['barva']=['kod' => 2389, 'nazev' => 'fialova'];
var_dump($arrayExample3);
echo '<br>';
$arrayExample3['barva']['kod']=5673;
var_dump($arrayExample3);


?>









