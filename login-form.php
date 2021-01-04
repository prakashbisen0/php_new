
<center>
<form action="" method="POST">
<div class="container">
    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="unm">
    <span><?php echo isset($userNameError)?($userNameError):'' ?></span><br>

    <label for="psw"><b>Password </b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <span><?php echo isset($passError) ? ($passError) : ''  ?></span><br>

    <button type="submit" name="submit">Login</button><br>
      
  </div>

  <?php 
$imageDetails=mysql_query("SELECT * FROM photos");?>
  <span class="psw"> Forgot<a href="/forget-password/?id='.$imageDetails['id'].'"> password?</a></span>

 <?php $studentDetails=mysql_query("SELECT * FROM student"); ?> 
  <span class="stude"><a href="/student/?id='.$studentDetails['id'].'">Registration</a></span>

</form>
</center>
