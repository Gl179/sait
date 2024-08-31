<?php
$arr = [5,4,2,6,7,3,3,2,3,5,67,4,243,23,2,5] ;
for ($i = 0; $i < 1000; $i++) 
{
array_push($arr, rand(-1000,1000));
}
function bubble_sort($arr) {
for ($i = 0; $i < count($arr); $i++) {
  for ($j = 1; $j < count($arr); $j++) {
  if ($arr[$j-1] > $arr[$j]) {
   $buffer = $arr[$j-1];
    $arr[$j - 1] = $arr[$j];
    $arr[$j] = $buffer;
 }
}
}
 return $arr;
}
$arr2 = bubble_sort($arr);

//print_r($arr2);

function merge(array $lst1, array $lst2)
{
 $result = [];
 while ($lst1 && $lst2) 
 {
  if ($lst1[0] > $lst2[0])
  {
   $buffer = array_shift($lst2);
  }
  else if ($lst1[0] < $lst2[0]) {
   $buffer = array_shift($lst1);
  }
  array_push($result, $buffer);
 }
 return array_merge(array_merge($result, $lst1),$lst2);
}
// $a = [3, 4, 6, 33, 66, 88];
// $b = [2, 11, 44, 333, 333, 345];
// print_r(merge($a, $b));

function merge_sort($arr)
{
 if (count($arr) < 1)
 {
  return $arr;
 }
 return merge
 (
  merge_sort(array_slice($arr, 0, intdiv(count($arr), 2))),
  merge_sort(array_slice($arr, intdiv(count($arr), 2, count($arr)))),
 );
}
#$start = microtime(true);
#print_r(merge_sort($arr));
#echo microtime(true) - $start;







$arr = [1, 4, 6, 33, 54, 55, 65, 66, 67, 566, 566, 567, 5444];
function search_binary($arr,$search){
 if (count($arr) <= 1 && $search != $arr[0]) {
  return 0;
 }

 $ceed = $arr[intdiv(count($arr),2)];
 if ($ceed == $search) {
  return true;
} else {
 if ($ceed >= $search) {
  return search_binary(array_slice($arr,0, intdiv(count($arr),2)), $search);
 } else {
  return search_binary(array_slice($arr, intdiv(count($arr),2), count($arr)), $search);
 }

}
return 0;
}
echo search_binary($arr,4);