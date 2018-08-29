<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);

// Login
if (isset($_POST['submit'])){
    $user = trim($_POST['user']);
    $pass = $_POST['pass'];
    if ($user == 'admin' and $pass == 'admin'){
        $_SESSION ['foued'] = $user;
        header('Location: profile.php');
    }
}

//if session -> go to profile.php
if ($_SESSION['foued']){
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Auto-Logout</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><label>Username :</label></td>
            <td><input type="text" name="user"/></td>
        </tr>
        <tr>
            <td><label>Password :</label></td>
            <td><input type="password" name="pass"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:10px">
            <input type="submit" value="Login" name="submit" /></td>
        </tr>
    </table>
</form>
</body>
</html>