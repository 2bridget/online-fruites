<?php



session_start();



$con = mysqli_connect('localhost', 'root', '');


mysqli_select_db($con, 'fruits');


$name = $_POST['name'];
$pass = $_POST['pass'];


$s = "select * from usertable where name = '$name' and password = '$pass'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    
    header ('location:panel2.php');
}else{
    echo 'Wrong Name or Password! <a href="login.php">Try again</a>';
}


?>