
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <h2>Muliplication of 1 to 5 </h2>;
    <form action="" method="post">
    <input type="number" name="search" id="search" placeholder="enter table number" >
    <button type="submit" name="sumbit">Enter</button>
    </form>
<?php
for($i=1 ; $i<=5; $i++){
    $search_val = $_POST['search'];
    if($search_val!=NULL){
        for($j=1;$j<=$search_val;$j++){
            echo $i." x ".$j.' '.'= '. ($i*$j)."<br>";
    }
    }
    echo "<br>";
};
?>
</body>
</html>