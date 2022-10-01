<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "mybook";

$con = mysqli_connect($servername, $username, $password, $db);

if($con){
   ?>
   <script>
       alert("Connection is successful!!");
   </script> 
    <?php
}
else{
    ?>
    <script>
        alert("Error! Connection failed");
    </script>
    <?php
}

?>