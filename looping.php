<?php


echo 'While loop:';

$a = 1;

echo '<ol>';
while($a<=15){
    echo '<li>'."Hello World".'</li>';
    $a = $a+1;
}
echo '</ol>';



echo 'dowhile loop:<br>';

$b =10;

do{
    echo $b.'.Hello Subham<br>'.'<br>';
    $b--;
}while($b>=1);




echo 'ForLoop:<br><br>';
for($i=1; $i<=10; $i++){
    echo $i.')Hello For Loop<br>'.'<br>';
}



echo 'forloop dec: <br><br>';
for($i=10; $i>=1; $i--){
    echo $i.')Hello For Loop<br>'.'<br>';
}



?>