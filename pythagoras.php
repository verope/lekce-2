<?php

$a = 17;
$b = 14;

$obdelnikObsah = $a * $b;

echo "Obsah obdelniku o stranách a: $a cm a b: $b cm je $obdelnikObsah cm2";
echo "<br>";



echo "<br>";

$strana = 6;
$uhel = 60;

//$uhelRad = deg2rad($uhel);
$vyska = sin(deg2rad($uhel)) * $strana;

$trojuhelnikObsah = round(($vyska * $strana)/2,1) ;

echo "Rovnostranný trojúhelník o straně délky $strana cm a úhlu $uhel stupňů je $trojuhelnikObsah cm2";
