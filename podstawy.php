<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imię i Nazwisko: $firstName $lastName<br>";

//heredoc
$data = <<< DATA
<hr>
Imię: $firstName <br>
Nazwisko: $lastName
<br>
DATA;
echo $data;

//
$data1 = <<< DATA
<hr>
Imię: $firstName <br>
Nazwisko: $lastName
<br>
DATA;
echo $data1;

$bin=0b1010;
echo $bin; //10

$oct=0101;
echo $oct; //65

$hex=0x1A;
echo $hex; //26

echo PHP_VERSION; //wersja php 7.4.2

$x=1;
$y=1.0;

echo gettype($x); //integer
echo gettype($y); //double

if($x==$y)
{echo "Równe";}
else 
{echo "Różne";}

if($x===$y)
{echo "identyczne";}
else 
{echo "Nieidentyczne";}
?>