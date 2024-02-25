<?php


$x = 10;
$y = "90";


$z = $x+$y;

echo $z."<br>";

//+,-,*,/,++,--,% (arthimatic)


$a = 4;
$b = 6;


$c = ($a+$b) * 3;


echo $c."<br>";

//==,===,<=,>=,!==,!=  (Comparsion)


$d = 20;

$e = "20";
$f =  $d == $e;

echo $f."<br>"; // true



if($d===$e){
    echo "Equal ";
}
else{
    echo 'not equal'."<br>";
}



//&&,||,!,or,and,xor



$age = 26;

if($age>=18 xor $age<=21 ){
    echo 'You are eligible';
}
?>