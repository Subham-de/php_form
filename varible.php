
<?php

$name = "subham<br>";
$lang = "PHP<br>";


echo "Hello how are u ?".$name;

echo $lang;
echo $lang;
echo $lang;
echo $lang;



//global variable
$x = 5;
$y = 10;


function Sum(){
    global $x,$y;
    echo "<p>Total sum is : </p>".$x+ $y;
}

Sum();

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();



  //static


  function Increment(){
    static $count = 0;
    $count++;
    echo "Count :".$count;
  }


  Increment()
?>
