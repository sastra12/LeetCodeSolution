<?php

function subtractProductAndSum($n)
{
  $array = str_split($n);
  $productOfDigits = 1;
  $sumOfDigits = 0;
  for ($counter = 0; $counter < count($array); $counter++) {
    $productOfDigits = $productOfDigits * (int) $array[$counter];
    $sumOfDigits += (int) $array[$counter];
  }
  return $productOfDigits - $sumOfDigits;
}

var_dump(subtractProductAndSum(234));
var_dump(subtractProductAndSum(4421));
