<?php
//session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass =  "";
    $dbname ="sms";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("Connection Failed : %s\n".$conn ->error);
    }else{
     $_SESSION['con']=true;
    }


function CloseCon($conn){
    $conn -> close();
}


?>