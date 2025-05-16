<?php
$i = 1;
while ($i <= 10) {
    echo "\n $i <br>";
    $i++;
}
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

$i = 1;
do {
    echo $i;
    $i++;
} while ($i < 11);

$i = 0;
while (true) {
    if ($i == 5) {
        break;
    }
    echo "$i <br>";
    $i++;
  }

  $i = 0;
while($i < 10){
    $i++;
    if($i % 2 == 0){
        continue;
    }
    echo "$i <br>" ;
  }
  $minimo = 10;
  $maximo = 30;
  $numero = $minimo + 1;

while ( $numero < $maximo) {
    echo $numero;
    $numero++;
}


?>