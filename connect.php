<?php
   $name =$_POST['name'];
   $email =$_POST['email'];
   $phone =$_POST['phone'];
   $address =$_POST['address'];
   $cake =$_POST['cake'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cakeorder";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

   if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into info(name,email,phone,address,cake) 
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss", $name,$email,$phone,$address,$cake);
    $stmt->execute();
    echo "Order Placed";
    $stmt->close();
    $conn->close();
   }
?>