<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <form action="index.php" method= "POST"  class="vh-100 d-flex align-items-center justify-content-center flex-column text-capitalize">
        <h2 class="">Login form</h2>
        <input class="rounded-pill text-capitalize mb-3 p-3 " type="email" name="email" placeholder=" enter your E-mail">
        <input class="rounded-pill text-capitalize mb-3 p-3" type="password" name="password" placeholder="enter your password">
        <input class="rounded-pill text-capitalize mb-3 p-3 mb-2 bg-success-subtle text-emphasis-success"type="submit" value="Login">
    </form>


    <?php

$email = "Muntdher444@gmail.com";
$password = "123456789";



if($email == $_POST['email'] && $password == $_POST['password'] ){
    header('location: profile.php');

}else{
    echo'error wrong dete ';
}


     
    
    ?>
    
</body>
</html>