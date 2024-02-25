
<?php


//explode 
$str = "This is string value notice";

$new_explode = explode(" ",$str,2);


echo "<pre>";
print_r($new_explode);
echo"</pre>";


var_dump($new_explode);


echo "<br>";



////how to add multiple data on table on mutiple formsumbit
//implode

$arr = array('1','2','3','4','5');

$text = implode('-',$arr).'<br>';

echo $text;
var_dump($text)
?>