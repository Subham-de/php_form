<?php




$collection = [
    [1,"rocky","developer",45000],
    [2,"jack","developer",65765],
    [3,"sohn","developer",34223],
    [4,"opns","developer",30000],
];

for($row= 0; $row<4 ; $row++){
        for($column=0 ; $column<4 ; $column++){
                echo $collection[$row][$column]." ";
    }
    echo "<br>";
};



echo "<table border='2px' cellpadding='2px' cellspacing='0'>";
echo "<tr>
    <th>id</th>
    <th>Name</th>
    <th>Position</th>
    <th>Salary</th>
";
echo "</tr>";
foreach($collection as $value){
    foreach($value as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


 $assarray = [  
    "Mohan"=>[
        'phy'=>62,
        'math'=>68,
        'eng'=>96
    ],
    "rakesh"=>[
        'phy'=>52,
        'math'=>78,
        'eng'=>36
    ],
    "johan"=>[
        'phy'=>52,
        'math'=>78,
        'eng'=>56
    ]
    ];


    // echo count($assarray);

echo "<table border='2px' cellpadding='2px' cellspacing='0'>";
echo "<tr>
    <th>Name</th>
    <th>phy</th>
    <th>math</th>
    <th>english</th>
</tr>";
foreach($assarray as $key=>$v1){
    echo "<tr><td>$key</td>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo "</table>";



$newarray = array('hello','world','count','nothing');

$len = count($newarray);



for($i=0 ; $i<$len ; $i++){
    echo $newarray[$i].'<br>';
}


$fruits = array('orange','apple','grapes','pineapple');


// $fruits_ass = array(a=>'orab')

// if(in_array('apple',$fruits)){
//     echo 'Find successfully<br>';
// }
// else{
//  echo 'Unable to find';
// }


// echo array_search('orange',$fruits)

// ?>







