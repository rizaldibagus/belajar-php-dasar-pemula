<?php
if ( isset($_POST["submit"]) ) {
    if( $_POST["username"] == "admin1" && $_POST["password"] == "123456" ) {
        header("Location: latihan1.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <h1>Login Admin</h1> 
<?php if ( isset($error) ) : ?>
   <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>
    <ul>
   <form action="" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
    <label for="pw">Password :</label>
        <input type="password" name="password" id="pw">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
   </form>
    </ul>
</body>
</html>