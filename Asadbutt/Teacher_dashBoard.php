 <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="student_style.css">
    <!--for header -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- for sidebar -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Teacher Dashboard</title>

</head>
<body style="background-color:#F4F6F9">
<div  class="" ="header">
<a> School managment System </a> 
<div class="header-right">
<a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>
</div>
<div class="w3-sidebar w3-bar-block w3-white w3-xlarge" style="width:170px; margin-top:50px; margin-left:20px ">
<center>
    <div ><i class="fa fa-user"></i></div>
    <p> Teacher name</p>
</center>
<hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home">  Home</i></a> 
  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user">  User </i></a> 
  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap">Academic</i></a> 
 <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe">Exam</i></a>
  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-check">Fee Details</i></a> 
  <hr>
</div>


<div style="margin-left:220px;margin-top:50px; width: 80%; background-color:white; height:20%;">

<div class="w3-container">
<h2 style="color:black;">Dashboard</h2>

</div>

</div>
<div style="margin-left:220px;margin-top:100px; width: 20%; background-color:white;">
 
<i class="fa fa-user"><b> Students</b></i><br><br>
<h1> 12 </h1><br><br>
<p> Total Number of Student</p>
</div>

<div style="margin-left:600px;margin-top:-180px; width: 20%; background-color:white;">
    <div class="w3-bar-item ">
<i class="fa fa-user"> <strong>Teacher</strong></i><br><br>
<h1> 5 </h1><br><br>
<p> Total Number of Teachers</p>
</div>
</div>

</body>
</html>