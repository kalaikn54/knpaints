<html>
<head>
<title>loginpage</title>
<style>
body{background-color:#F86900;}
</style>
<?php
session_start();
?>
</head>
<body>
   
    <?php
    
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    $uname=$_POST["email"];

    $pswd=$_POST["pass"];

    if( $uname=="kalai54@gmail.com" && $pswd=="kalai54")
    {
$_SESSION['name']=$uname;
header("location:knpaint.php");

    }
else
{
    echo'<h1>Invalid User Name & Password</h1>';
}

}


    ?>
     <form method="POST" action="login.php">
    <label>Email:</label><input type="text" name="email"><br>
    <label>Password:</label><input type="password" name="pass"><br>
    <input type="submit" value="login">

</body>
</html>