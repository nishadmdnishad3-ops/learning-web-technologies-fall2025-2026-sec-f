<?php

$number1= 5;
$number2= 10;
$number3= 15;

if ($number1>$number2 && $number1>$number3) {
  echo "Number 1 Higher value";
} elseif ($number2>$number1 && $number2>$number3 ) {
  echo "Number 2 Higher value";
} else {
  echo "Number 3 Higher value";
}

?>