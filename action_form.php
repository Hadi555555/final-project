<?php 

$name=$_POST['name'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$joining_date=$_POST['joining_date'];

$server_name="localhost";
$user_name="root";
$password="";
$database_name="assainment2";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

// else{
//     echo "Connected Successfully";
// }


$sq="INSERT INTO instractor( id, name, designation,salary,phone,joining_date) 
VALUES ( NULL, '$name', '$designation', '$salary', '$phone', '$joining_date')";

$result=$conn->query($sq);

if($result){

    header('location:index.php');
}
else{
    echo "Data not inserted";
}


$conn->close();

?>