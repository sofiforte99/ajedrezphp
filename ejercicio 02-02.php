<?php
$A = 65;
$B = 66;
$C= 67;

$var1 = $A . $B . $C;

//echo $var1;

echo (str_replace('7','1','656667'));

//forma 2
$A = 'A';
$B = 'B';
$C = 'C';

$asciicode1 = ord($A);
$asciicode2 = ord($B);
$asciicode3 = ord($C);
$conc = $asciicode1 . $asciicode2 . $asciicode3;
echo $asciicode1 . $asciicode2 . $asciicode3;

echo str_replace("7","1",$conc);

$conc2 =str_replace("7","1",$conc);

$resta = $conc - $conc2;

echo $resta;




/*
echo ord ("A");/*

$items = array ('A', 'B', 'C');
echo md_ord ('',$items);*/




?>