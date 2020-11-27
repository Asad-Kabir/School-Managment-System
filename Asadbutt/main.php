 


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page of School Managment System</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
 <center>
     <h1> School Managment System </h1>
 
 <hr>
<h2> Select Your Role</h2>
 <div>
<form method="POST">
        <button class="button button1"  name="admin" id="adbtn"   >Admin<br><br>
        <button class="button button2"  name="teacher" id="adbtn2"  >teacher<br><br>
        <button class="button button3" name="student" id="adbtn3"  >student<br><br>      
</form>
 </div>
</center>
<?php
unset($_SESSION['NAME']);
if(isset($_POST['admin'])){
  $_SESSION['NAME']="admin";
  header("location: admin_login_form.php");
}else if(isset($_POST['student'])){
    $_SESSION['NAME']="student";
  header("location: admin_login_form.php");
}else if(isset($_POST['teacher'])){
    $_SESSION['NAME']="teacher";
  header("location: admin_login_form.php");
}
?>
</body>
</html>


    
   


