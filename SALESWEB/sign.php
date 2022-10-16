<?php
if(isset($_SERVER['REQUEST_METHOD']=='POST')){
    include'connect.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href = "style.css" >
</head>
<body>
    <form action="connect.php"method="POST">
        <h1>Sign up here</h1>
        <div class="container"> <div><input type="username" placeholder="Enter your user name"name="username"></div>
        <div> <input type="email" placeholder="Enter your personal email"name="email"></div>
        <div>
        <input type="password" placeholder="Enter your password"name="password"></div>
        <input type="submit" value="submit"name="password"></div></div></div>
        <div>
      
</form>
    
</body>
</html>