<?php

# if
$a = 4;

if ($a == 1) {
    echo "Je to jedna";
} elseif ($a == 2) {
    echo "Je to dva";
} else {
    echo "Neni to ani jedna ani dva";
}

echo "<br></br>";
echo "<hr>";
echo "<br></br>";

# while loop

$b = 3;
while ($b < 10) {
    $b += 1;
    echo $b . '<br>';
}

echo '<hr>';
$b = 3;
do {
    echo $b . '<br>';
    $b = $b + 1;
} while ($b < 10);


/*
$a = 1;
While ($a < 10) {
  $a = $a + 1;
  echo $a . '<br>';
}

$a = 1;
Do {
  echo $a . '<br>';
  $a = $a + 1;
} while ($a < 10);
?>
*/

