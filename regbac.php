<?php



session_start();





$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'fruits');

$name = $_POST['name'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$pass = $_POST['pass'];


$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = "insert into usertable(name, mail, gender, password) values ('$name', '$mail', '$gender', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successfull <a href='login.php'>Login</a> ";
}


?>