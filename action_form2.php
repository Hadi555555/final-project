<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="trina";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

// else{
//     echo "Connected Successfully";
// }
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$courses=$_POST['courses'];



$sq="INSERT INTO student1( id, name, phone, email, courses) 
VALUES ( NULL, '$name', '$phone', '$email', '$courses')";

$result=$conn->query($sq);

if($result){
    echo "Data inserted";
}
else{
    echo "Data not inserted";
}


$conn->close();

?>