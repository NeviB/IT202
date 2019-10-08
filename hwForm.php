

<html>
  <body>
  <form method="post">
      Username: <br>
      <input type="text" name="username"> <br>
      Password: <br>
      <input type="password" name="password"> <br>
      Confirm Password: <br>
      <input type="password" name="confirmPassword"> <br>
      
     
      
      <input type="submit">
    </form>
  </body>
</html>
<?php
  $username =  $_POST["username"];
  $password =  $_POST["password"];
  $confirmPassword =  $_POST["confirmPassword"];
  
  if($password == $confirmPassword){
    echo "YOUR PASSWORDS ARE THE SAME";
  }
  else{
    echo "YOUR PASSWORDS DO NOT MATCH!!!";
  }
?>
