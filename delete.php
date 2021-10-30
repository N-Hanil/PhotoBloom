<?php
    $con = mysqli_connect('localhost','root','','photobloom');
    $email = $_POST['email'];
  
    $check_data = mysqli_query($con,"DELETE FROM socialmedialogins WHERE email = '$email'");
    $check = mysqli_num_rows($check_data); 

    if($check > 0){
        echo "The account has been deleted";
    }else{
        echo "Error";
    }

?>