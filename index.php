<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Dest = $_POST['Dest'];
    $Info = $_POST['Info'];
    $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';

    echo "Data received successfully!";
}
?>