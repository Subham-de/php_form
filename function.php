<?php

function hello(){
    echo 'HEllo World ! <br>';
}


hello();
hello();
hello();
hello();
hello();
hello();



//function with parameter



function fullname($fname,$lname){      
    echo "Hello MR.$fname.$lname <br>";
}

fullname('subham','kumar');

function param($a,$b){
    echo $a+$b.'<br>';
}

param(10,20);


//function with return


function Subject($eng,$hindi,$math){
    $s = $math+$eng+$hindi;

    return $s;
}

function Percentage($st){
    $per = $st/3;

    echo 'total percentage: '.$per.'%'.'<br>';
}

$total = Subject(70,40,67);

Percentage($total);



//function with refercene arguments
function first($num){
    $num +=5;
}

function second(&$num){
    $num +=7;
}

$number = 10;

first($number);

echo "Orginal value is $number<br>";

second($number);

echo "Byrefernce value is $number<br>";




$hello = function($name){
    echo $name.'<br>';
};

$hello('anomoyous function');



//function recursive


//find factorail 


function factorail($n){
    if($n==0){
        return 1;
    }
    else{
        return ($n*factorail($n-1));
    }
}


echo factorail(3).'<br>';



//even or odd



function CheckNumber($num){
    if($num%2==0){
        echo $num . ': is even number <br>';
    }
    else{
        echo $num . 'is odd number';
    }
}

CheckNumber(2);




//prime number

function CheckPrimeNumber($priNum){
    if($priNum <=1){
        return false;
    }

    for($i=2 ;$i<$priNum ; $i++){
        if($priNum % $i == 0){
            return false;
        }
    }

    return true;
}


$prime = 17;


if(CheckPrimeNumber($prime)){
    echo "$prime is prime number <br>";
}
else{
    echo "$prime is non-prime number <br>";
}


echo "<h2>Multiplication Table for 2</h2>";



?>
