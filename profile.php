<?php 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $conn = mysqli_connect('localhost', 'root', '', 'profile');
      if(mysqli_connect_error())
      {
         echo "<p>Error occurred..kindly try again later.</p>";
         exit();
      }
      $username=$_POST["username"];
      $email=$_POST["email"];
      $confirmpassword=$_POST["confirmpassword"];
   }
?>
<html>
<head>
   <title>knpaint.com</title>
   <style>
   body{background-color:#00dadae5;background-repeat:no-repeat;}
      </style>
</head>

<body>

<?php 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $qry = "insert into details2(username,email,confirmpassword)
            values('$username', '$email', '$confirmpassword');";
      $res = $conn->query($qry);
      if($res)
      {
         echo "<p>Your data is stored inside the database successfully.</p>";
         exit();
      }
      else 
      {
         echo "<p>Error occurred, kindly try again later.</p>";
         exit();
      }
   }
?>
<center>
<form method="post">
<br/>
<input type="text" name="username" maxlength="40" placeholder="enter your username"><br/>
<input type="text" name="email" maxlength="40" placeholder="enter your email"><br/>
<input type="confirmpassword"name="confirmpassword" maxlength="40" placeholder="confirmpassword"><br/>
<input type="submit" name="submit" value="sign in">
</form>
</center>
</body>
</html>