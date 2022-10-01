<?php

session_start();
include 'config.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_email = "select * from signup where email = '$email'";

    $query = mysqli_query($con, $query_email);
    $email_count = mysqli_num_rows($query);  // count the numbers of email is exists into the database


    if($query_email){
         // this code is executed when the email is exists in the database
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        $pass_decode = password_verify($password,$db_pass);

        if($pass_decode){
            echo "successful";
        }

        else{
            echo "Invalid password";
        }

    }
    else{
        echo "Wrong email!!";
    }
}

?>