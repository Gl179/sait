<?php

function close($elem)
{
 $s = function ($seccond) use ($elem) {
  return $elem * $seccond;
 };
 return $s;
}
$rr = [close(4), close(3)];
for ($i = 0; $i < 4; $i++) {
 $rr[0]($i);
}
function bubble_sort($arr)
{
 // O(n^2) 
 for ($i = 0; $i < count($arr); $i++) {
  for ($j = 1; $j < count($arr); $j++) {
   if ($arr[$j - 1] > $arr[$j]) {
    $buffer = $arr[$j - 1];
    $arr[$j - 1] = $arr[$j];
    $arr[$j] = $buffer;
   }
  }
 }
 return $arr;
}


// for ($i = 0; $i < 100000; $i++) {
//  array_push($arr, rand(-100000, 100000));
// }
function merge(array $lst1, array $lst2)
{
 $result = array();
 while ($lst1 && $lst2) {
  if ($lst1[0] > $lst2[0]) {
   $buffer = array_shift($lst2);
  } else {
   $buffer = array_shift($lst1);
  }
  array_push($result, $buffer);
 }
 return array_merge(array_merge($result, $lst1), $lst2);
}
function merge_sort($arr)
{ // O(n*log n)
 if (count($arr) <= 1) {
  return $arr;
 }
 if (count($arr) == 2) {
  return [min($arr), max($arr)];
 }
 return merge(
  merge_sort(array_slice($arr, 0, intdiv(count($arr), 2))),
  merge_sort(array_slice($arr, intdiv(count($arr), 2), count($arr)))
 );
}

function search_elem($arr, $search)
{
 // O(n)
 foreach ($arr as $k => $v) {
  if ($search == $v) {
   return true;
  }
 }
 return 'false';
}

$arr = [1, 4, 6, 33, 54, 55, 65, 66, 67, 566, 566, 567, 5444];
function search_binary($arr, $search)
{ // O (log N)
 if (count($arr) <= 1 && $search != $arr[0]) {
  return 0;
 }
 $ceed = $arr[intdiv(count($arr), 2)];
 if ($ceed == $search) {
  return true;
 } else {
  if ($ceed >= $search) {
   return search_binary(
    array_slice($arr, 0, intdiv(count($arr), 2)),
    $search
   );
  } else {
   return search_binary(array_slice(
    $arr,
    intdiv(count($arr), 2),
    count($arr)
   ), $search);
  }
 }
 return 0;
}





function A(int $a, string $b, array $c = [1, 2, 3], bool $d = true)
{
 if ($a % 2 == 0)
   return $a;
}

$a = array_filter([1, 2, 3, 4, 5, 6, 7], fn($a, bool $eq = false) => $a % 2 == $eq);

echo '<form action="expertize.php" method="get">';
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$res = [];
$closes = [];
for ($i = 0; $i < 10; $i++) {
 array_push($res, $i);
 array_push($closes, close($res[$i]));
 echo "<button class='calc_nums' name='$i'>$i</button><br>";
}
if ($_GET) {
 $s = array_keys($_GET)[0];
} else {
 $s = 2;
}
for ($i = 0; $i < 10; $i++) {
 echo $closes[$s]($i) . "<br>";
}

echo "</form>";
?>
<script>
 let a = document.getElementsByClassName('calc_nums');
 var updateClickCount = (function() {
  var counter = 0;

  return function() {
   ++counter;
   document.getElementById("spnCount").innerHTML = counter;
  }
 })();
</script>

<html>
<button onclick="updateClickCount()">click me</button>
<div> you've clicked
 <span id="spnCount"> 0 </span> times!
</div>
</script>