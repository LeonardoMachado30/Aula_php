<?php

$numero_1 = 4;
$numero_2 = 5;

do {

  $soma = $numero_1 + $numero_2;

  ++$numero_1;
  ++$numero_2;

} while ($soma <= 9);

echo $soma;