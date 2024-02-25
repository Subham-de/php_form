<?php
$num= "100";


if($num==100){
    echo 'num is equal'.'<br>';
}
else{
 echo 'num is not equal';
}



$per = 110;


if($per>=80 && $per<=100){
    echo 'You re on merit';
}
else if($per>=60 && $per< 80){
    echo ' 1st Divison';
}
elseif($per>=45 && $per<60){
    echo '2nd divison';
}
else if($per>=33 && $per<45){
    echo '3rd division';
}
else if($per < 33){
    echo 'You are fail';
}
else{
    echo 'please enter valid percentage'.'<br>';
}


$weekdays = 2;

switch($weekdays){
    case 1:
    echo "Monday";
    break;
    case 2:
    echo 'Tuesday'.'<br>';
    break;
    case 3:
    echo "Wednesday";
    break;
    case 4:
    echo "Thursday";
    break;
    case 5:
    echo 'Friday';
    break;
    case 6:
    echo "Saturday";
    break;
    case 7:
    echo "sunday";
    break;
    default:
    echo 'please enter valid weekdays';
    break;
}


$x = 30;

$z = ($x> 20) ? "Greater":"smaller";

echo $z;


?>