<?php
    $con = mysqli_connect('localhost','root','','photobloom');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE socialmedialogins SET password = '$password' WHERE email = '$email'");

    if($check > 0){
        echo "Data Updated Successfully";
    }else{
        echo "Error";
    }

?>