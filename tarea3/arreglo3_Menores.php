<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}
$a=array(23, 4, 32, 67, 74, 78, 88, 56, 21, 34, 57, 92, 2, 1,11);
usort($a,"my_sort");
echo 'Los 3 menores valores del arreglo son: '.'<br>';
for($x=0;$x<3;$x++)
  {
  echo $a[$x];
  echo "<br>";
  }
?>
