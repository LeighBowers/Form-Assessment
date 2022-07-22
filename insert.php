<?php
$server ="localhost";
$username ="root";
$password ="";
$db ="dlonra_academy";
$Path = 3306;


// Connecting data 

$conn = new mysqli ($server, $username, $password, $db, $Path3306 );
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);


    $sql = "insert into dlonra_academy (name, surname, email)
    valus('$name' , '$surname', '$email')";




// if(isset($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"])) {

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];


// $query ="insert into form(name,surname,email) values('$name' , '$surname' , '$email')";

}
// echo $name. "<br>".$surname. "<br>".$email."<br>"
?>