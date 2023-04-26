<?php
print_r($_POST)  
$name=$_POST['Name'];
$Location=$_POST['Location name'];
$Phone number=$_POST['Phone number'];
$Email=$_POST['Email'];
$Products and services required=$_POST['Products and services required'];


$conn= new mysqli('localhost','root','',data_base);
if($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
    
}else{
    $stmt=$conn->prepare(" insert into my_form(Name, Location, Phone number, Email,Products and services required, )
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis", $name, $Location, $Phone nummber,$Email,);
    $stmt->execute();
    echo "Details entered successfully...";
    $stmt->close();
    $conn->close();

}
$host="localhost";
$dbname="Group project";
$username="root";
$password="";

$conn=mysqli_connect($host, $username, $password. $dbname);

if (mysqli_connect_errno()){
    die("connection error: ".mysqli_connect_error())
}
echo"Connection succesful.";
?>