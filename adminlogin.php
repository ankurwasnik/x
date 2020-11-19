<?php
//include auth_session.php file on all user panel pages
    session_start();
    if(isset($_SESSION["adminUsername"])) {
        echo "You already logged In!";
        header("Location: admin.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style.css"> 
</head>
<body >
<?php
    require('db.php');
    
    if (isset($_REQUEST['rememberMe'])) { //only enable session when rememberMe is checked.
        session_start();
        $_SESSION["adminUsername"] = $_REQUEST['username'];
        echo "Rememberme";

    }
    
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['adminUsername'] = $username;
            // Redirect to user dashboard page
            header("Location: admin.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='adminlogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {

?>

<form class="form" method="post" action="admin.php">
	<h1 class="login-title">Admin Login</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
    <input type="password" class="login-input" name="password" placeholder="Password" required />
    <input type="checkbox" name="rememberMe" >Remember Me <br>
    <input type="submit" value="Login" name="submit" class="login-button"/>
    <p class="link" ><a href="login.php"> User Login ?</a>
    
	
</form>

<?php
    }
?>

</body>
</html>