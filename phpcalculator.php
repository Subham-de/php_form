<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="bg-secondary text-white p-5 mt-4">
            <h2> Calculator_using Php  </h2>
            <div class="row">   
                <div class="col-sm-4">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, facere?</p>
                </div>
                <div class="col-sm-6">
                    <form action="" method="post">
                        <label for="num" class="form-label">NUM_1</label>
                        <input type="number" class="form-control" name="num_1" id="num_1">
                        <label for="num" class="form-label">NUM_2</label>
                        <input type="number" class="form-control" name="num_2" id="num_2">
                        <label for="calculate">Calculate</label>
                        <select name="opertion" id="opertion" class="form-select text-danger">
                            <option value="add">ADD</option>
                            <option value="sub">SUB</option>
                            <option value="mul">MUL</option>
                            <option value="div">DIV</option>
                        </select>
                        <button type="submit" name="sumbit" class="btn btn-primary mt-3 mb-3">Calculate</button>
                    </form>
                </div>
            </div>
            <?php
        if(isset($_POST['sumbit'])){
            $num_1 = $_POST['num_1'];
            $num_2 = $_POST['num_2'];
            
            //echo $num_1.$num_2;

            switch($_POST['opertion']){
                case 'add': $add=$num_1+$num_2;
                echo "<h2>The addition of two number is $add</h2>";
                break;
                case 'sub':$sub=$num_1-$num_2;
                echo "<h2>The Sub of two number is $sub</h2>";
                break;
                case 'mul':$mul=$num_1*$num_2;
                echo "<h2>The mul of two number is $mul</h2>";
                break;
                case 'div':$div=$num_1-$num_2;
                echo "<h2>The div of two number is $div</h2>";
                break;
                default:
                echo "Doesnt exist number";
                break;
            }
        }
    ?>
   
        </div>
    </div>
</body>
</html>