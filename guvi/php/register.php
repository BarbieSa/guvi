<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$contactnumber = $_POST['contactnumber'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','guvi');
if($conn->connect_error){
    die("Connection failure: " . $conn->connect_error);
}
$select = "select * from register where email='$email'";
$result = mysqli_query($conn, $select);
$count = mysqli_num_rows($result);

if ($count < 1) {
    $insert = "INSERT INTO register(firstname,lastname,age,contactnumber,email,password) 
    VALUES('$firstname','$lastname','$age','$contactnumber','$email','$password')";
    mysqli_query($conn, $insert);
    echo 1;
    exit;
}else{
    echo 2;
    exit;
}    
?>
