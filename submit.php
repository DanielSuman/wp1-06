<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněná data</h1>
    <?php 
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    echo "You filled in the username: $username";
    echo "</br>";
    echo "You filled in password: $password";
    echo "</br>";
    if(($username == 'Daniel') && ($password == "mojeheslo")) {
           echo "Login succesful!";
    }      else {
           echo "Invalid username or password.";
    }
?>
</body>
</html>