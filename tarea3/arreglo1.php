<?php
$arreglo = array('KeyStr1' => 'jajja',0=> 'jejejje', 'KeyStr2'=>'jjijiji',1=>'jojojo',2=>'jujuju' );
$palabras1= 'decirlo al reves lo dudo.';
$palabras2='!Que trabajo me ha costado!';
$resultado1 = ucwords($arreglo['KeyStr1']).' '.$arreglo['0'] .' '.$arreglo['KeyStr2'] .' '.$arreglo['1'] .' '.$arreglo['2'].',' .'<br> '. $palabras1;
$resultado2 = ucwords($arreglo['2']).' '.$arreglo['1'] .' '.$arreglo['KeyStr2'] .' '.$arreglo['0'] .' '.$arreglo['KeyStr1'].',' .'<br> '. $palabras2;
echo $resultado1 . '<br>' . $resultado2;
?>
