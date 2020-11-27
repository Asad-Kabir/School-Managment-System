<?php
 include 'conection.php';
session_start();

?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="index.css"> 
    <title>Login Page</title> 
</head> 
  
<body> 
<form action="" method="post"> 
        <div class="login-box">

            <h1><?php echo $_SESSION['NAME']." "; ?>Login Form</h1> 

            <div class="textbox"> 
                <i class="fa fa-user" aria-hidden="true"></i> 
                <input type="text" placeholder="Username"
                         name="username" value=""> 
            </div> 
  
            <div class="textbox"> 
                <i class="fa fa-lock" aria-hidden="true"></i> 
                <input type="password" placeholder="Password"
                         name="password" value=""> 
            </div> 
  
            <input class="button" type="submit"
                     name="login" value="Sign In"> 
        </div> 
    </form> 

    
</body> 
  
</html> 
<?php
 $connect = mysqli_connect("localhost","root","","sms");
if(!$connect){
    echo"
    <script>
        alert('Connection Failled');
    </script>
    ";
}else{
if(isset($_POST['login'])){
 $uname = $_POST['username'];
 $password = $_POST['password'];

$role = $_SESSION['NAME'];
 $select = "SELECT * FROM $role  Where username ='$uname' AND pass='$password'";
$result = mysqli_query($connect,$select);
if(mysqli_num_rows($result)>=1){
    $row = mysqli_fetch_assoc($result);
    if($row['username']==$uname && $row['pass']==$password){
        $_SESSION['username'] = $row['username'];
        if(  $role=="admin"){
            header("location: admin_dashboard.php");
            exit();
        }if(   $role=="student"){
            header("location: student_dashBoard.php");
            exit();
        }if(   $role=="teacher"){
            header("location: Teacher_dashBoard.php");
            exit();
        }
       
     
    }else{
        echo "
        <script>
            alert('the username and password is incorrect');
        </script>
        ";
    }
}else{
    echo "
    <script>
        alert('Problem ');
    </script>
    ";
}}
}
 /*   
}
$row = mysqli_fetch_array($result);
if($row['username'] == $uname && $row['password'] == $password)
{       
    $_SESSION['username'] = $row['username'];

   header("location: student_dashBoard.php");

   
    if($_SESSION['NAME']=="admin"){
        header("location: student_dashBoard.php");
        exit();
    }
    if($_SESSION['NAME']=="student"){
        header("location: student_dashBoard.php");
        exit();
    }
    if($_SESSION['NAME']=="teacher"){
        header("location: Teacher_dashBoard");
        exit();
    }
    
 
}else{
    echo "
    <script>
        alert('the user name and password is incorrect');
    </script>
    ";
}
*/
?>