<?php 
$con = mysqli_connect('localhost','root','','photobloom'); 
 
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email']; 
$password = $_POST['password']; 

$check_data = mysqli_query($con,"SELECT * FROM socialmedialogins WHERE email = '$email'"); 
$check = mysqli_num_rows($check_data); 

if($check > 0){ 
    echo "Email already exist";
 }
 else{ 
     $input = mysqli_query($con,"INSERT INTO socialmedialogins (id,username,email,password)VALUES('$id','$username','$email','$password')"); 
     if($input){ 
         echo 'Signup Successfull'; 
    } 
} 
?>