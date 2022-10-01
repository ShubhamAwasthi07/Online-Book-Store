<?php

include 'php/signup.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Styling a SignUp Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="signupFrm">
        <div class="wrapper">
            <form action="#" class="form" method="POST">
                <h1 class="title">Sign up</h1>
                <div class="inputContainer">
                    <input type="text" class="input" name="username"placeholder="a" required>
                    <label for="" class="label">Username</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" name="email" placeholder="a" required>
                    <label for="" class="label">Email</label>
                </div>


                <div class="inputContainer">
                    <input type="password" class="input" name="password"placeholder="a" required>
                    <label for="" class="label">Password</label>
                </div>

                <div class="inputContainer">
                    <input type="password" class="input" name="repassword" placeholder="a" required>
                    <label for="" class="label">Confirm Password</label>
                </div>

                <input type="submit" class="submitBtn" value="Sign up" name="submit"/>
            </form>
        </div>
    </div>
</body>

</html>