<html>
<head>
<title>welcomepage</title>
</head>
<body>
    <?php

if(isset($_COOKIE['name']))
{
echo "<h1>welcome ".$_COOKIE['name']."</h1>" ;
}
else
{
    header('Location:loginpge.php');
}
?>
<h1>HII! Kalaivanan WLCOME TO KNPAINT</h1>
<ul>
<li><?php
if ( (isset($_COOKIE['name'])) && (basename($_SERVER['PHP_SELF'])!= 'logout.php') ) {

  echo '<a href="logout.php">
  Logout</a>';
} else 
{
  echo '<a href="login.php">Login</a>';
}

?></li>
</body>
    


    
    
</body>
</html>
