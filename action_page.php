<?php

print_r($_POST);

$servername = "localhost";
$username = "tom";
$password = "admin1234";
$dbname = "Helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db("$dbname");


//$order = "
//INSERT INTO tb_cform
//
//        (name, address)
//
//        VALUES
//
//        ('$name',
//
//        '$address')";


//$result = mysqli_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}
?>