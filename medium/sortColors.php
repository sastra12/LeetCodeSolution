<?php

function sortColors(&$nums)
{
  $temp = 0;
  for ($i = 0; $i < count($nums); $i++) {
    for ($j = 0; $j < count($nums) - 1; $j++) {
      if ($nums[$j] > $nums[$j + 1]) {
        $temp = $nums[$j];
        $nums[$j] = $nums[$j + 1];
        $nums[$j + 1] = $temp;
      }
    }
  }
  return $nums;
}


$Arr = [2, 0, 2, 1, 1, 0];
$Arr1 = [2, 0, 1];
// sortColors($Arr);
var_dump(sortColors($Arr1));
