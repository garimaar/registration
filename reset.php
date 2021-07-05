<html>
<head>
    <meta charset="utf-8"/>
    <title>Reset</title>
    <link rel="stylesheet" href="edit.css"/>
</head>
<body>
<?php
require('config.php');
session_start();
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
 $email=$_SESSION['email'];
 $sql=mysqli_connect("localhost","root","" ,"application");
if($sql===false)
{
    die("cannot connect".mysqli_connect_error());
}
$sql2="update users set password='$new_password' where email='$email'";
if($result=mysqli_query($sql,$sql2))
{
    echo "<h1 id='change'>updated successfully.<a href='login.php'>back</a></h1>";

}
else{
    echo "<h1>cannot updated</h1>".mysqli_error($sql);
}
}
?>
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p>WELCOME</p>
    </div>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="post"> 
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="dashboard.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>
