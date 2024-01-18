<?php

// Single Number
function singleNumber($nums)
{
  $newArr = [];
  $temp = null;
  if (count($nums) == 1) {
    return $nums[0];
  } else {
    foreach ($nums as $value) {
      if (isset($newArr[$value])) {
        $newArr[$value] += 1;
      } else {
        $newArr[$value] = 1;
      }
    }
    // var_dump($newArr);
    // exit;
    foreach ($newArr as $val => $key) {
      // echo 'Ini adalah val: ' . $val . ' ini adakah key: ' . $key . PHP_EOL;
      if ($temp == null) {
        $temp = $key;
      } else if ($temp > $key) {
        $temp = $key;
      } else {
        $temp = $temp;
      }
    }
    foreach ($newArr as $value => $key) {
      if ($temp == $key) {
        return $value;
      }
    }
  }
}

// singleNumber([4, 1, 2, 1, 2]);
// singleNumber([2, 2, 1]);