<?php
function close($elem)
{
 $s = function ($seccond) use ($elem) {
  return $elem * $seccond;
 };
 return $s;
}
$rr = [];
for ($i = 0; $i < 10; $i++) {
 array_push($rr, close($i));
}
echo "<table>";
for ($i = 0; $i < 10; $i++) {
 echo "<tr>";
 for ($k = 0; $k < 10; $k++) {
  echo "<td style='border:1px solid black'>$i) </td><td>" . $rr[$i]($k) . "</td>";
 }
 echo "</tr>";
}
echo "</table>";