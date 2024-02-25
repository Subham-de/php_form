<?php
$cookie_name = "user";
$cookie_value = "nothing_much";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "blue";
echo "Session variables are set.";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';


var_dump(json_encode($jsonobj))
?>
</body>
</html>
