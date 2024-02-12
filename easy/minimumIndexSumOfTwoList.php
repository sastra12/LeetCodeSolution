<?php
function findRestaurant($list1, $list2)
{
  $smallIndex = [];
  $newArrList1 = [];
  $newArrList2 = [];
  for ($i = 0; $i < count($list1); $i++) {
    for ($j = 0; $j < count($list2); $j++) {
      if ($list1[$i] == $list2[$j]) {
        $newArrList1[$list1[$i]] = $i;
        $newArrList2[$list2[$j]] = $j;
      }
    }
  }
  // return [$newArrList1, $newArrList2];
  foreach ($newArrList1 as $key => $val) {
    if (isset($newArrList2[$key])) {
      // echo "$newArrList2[$key] - $val"  . PHP_EOL;
      $sum = $val + $newArrList2[$key];
      $smallIndex[$key] = $sum;
    }
  }
  asort($smallIndex);
  $minValue = [];
  // return $smallIndex;
  if (count($smallIndex) == 1) {
    return array_keys($smallIndex);
  } else {
    $keysWithMinValues = [];
    $minValue = PHP_INT_MAX;
    // Loop untuk mencari nilai terkecil
    foreach ($smallIndex as $key => $value) {
      if ($value < $minValue) {
        $minValue = $value;
        $keysWithMinValues = [$key];
      } elseif ($value == $minValue) {
        // Jika nilai sama dengan nilai terkecil yang ditemukan sebelumnya, tambahkan ke array
        $keysWithMinValues[] = $key;
      }
    }
  }
  return $keysWithMinValues;
}

var_dump(findRestaurant(["happy", "sad", "good"], ["sad", "happy", "good"]));
// var_dump(findRestaurant(["Shogun", "Tapioca Express", "Burger King", "KFC"], ["KFC", "Burger King", "Tapioca Express", "Shogun"]));
// var_dump(findRestaurant(["Shogun", "Tapioca Express", "Burger King", "KFC"], ["Piatti", "The Grill at Torrey Pines", "Hungry Hunter Steakhouse", "Shogun"]));
// var_dump(findRestaurant(["Shogun", "Tapioca Express", "Burger King", "KFC"], ["KFC", "Shogun", "Burger King"]));
