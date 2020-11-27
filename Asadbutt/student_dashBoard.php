<?php
session_start();
?>
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
   
    <title>Student Dashboard</title>
    <style>
    
    
#example2 {
  border: 0px solid;
  padding: 15px;

  box-shadow: 10px -10px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
    tr,td,th{
      padding:1vw;
        border: 1px solid black;
    }
    table{
      border:1px solid black;
      text-align:center;
    }
    </style>
</head>
<body style="background-color:#AAFFCC">
<div  class="header">
<a> School managment System </a> 
<div class="header-right">
<a href="Logout.php" class="btn btn-info btn-lg" style="cursor:not-allowed; pointer-events: ;">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>
</div>
<div  id="example2" class="w3-sidebar w3-bar-block w3-white w3-large" style="width:170px; height:500px; margin-top:50px; margin-left:20px ">
<center>
    <div ><i class="fa fa-user"></i></div>
    <p><?php echo $_SESSION['username'] ;?></p>
</center>
<hr>
  <button onclick="Home()" class="w3-bar-item w3-button"><i class="fa fa-home"> </i>  Home</button> 

  <button onclick="Student_detail()" class="w3-bar-item w3-button"><i class="fa fa-user"> Profile </i></button> 

  <button onclick="Academic()" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap">Academic</i></button> 
  <div id="academic" style="display:none">
      <ul>
        <li>
          <button onclick ="Subject()" class="w3-bar-item w3-button w3-small">Subjects</button>
        </li>
        <li>
        <button onclick= "Routine()" class="w3-bar-item w3-button w3-small" >Class Routine</button>
        </li>
        <li>
        <button onclick="Syllabus()" class="w3-bar-item w3-button w3-small" >Syllabus</button>
        </li>
        <li>
        <button class="w3-bar-item w3-button w3-small" >Daily Attendence</button>
        </li>
      </ul>
  </div>

  <button onclick="Exam()" class="w3-bar-item w3-button"><i class="fa fa-globe">Exam</i></button>
  <div id="Exam" style="display: none;">
    
    <ul>
      <li>
        <button onclick="checkMarks()" class="w3-bar-item w3-button w3-small"> Marks</button>
      </li>
      <li> <button onclick="checkGrades()" class="w3-bar-item w3-button w3-small">Grades</button>
      </li>
    </ul>
  </div>

  <button class="w3-bar-item w3-button"><i class="fa fa-check">Fee Detail</i></button> 
  <hr>

</div>


<div style="margin-left:220px;margin-top:50px; width: 80%; background-color:white; height:20%;">

<div class="w3-container">

<h2 id="heading" style="color:black;">Dashboard</h2>

</div>

</div>
<!-- Home Page Div -->
<div  id="home" style="display:block;">
    <div style="margin-left:220px;margin-top:100px; width: 20%; background-color:white;">
    
    <i class="fa fa-user"><b> Students</b></i><br><br>
    <h1> 12 </h1><br><br>
    <p> Total Number of Student</p>
    </div>

    <div id="" style="margin-left:600px;margin-top:-180px; width: 20%; background-color:white;">
        <div class="w3-bar-item ">
    <i class="fa fa-user"> <strong>Teacher</strong></i><br><br>
    <h1> 5 </h1><br><br>
    <p> Total Number of Teachers</p>
    </div>
    </div>
</div>

<!-- User Div -->
<div id="student_Detail" style="margin-left:290px; margin-top:30px; display:none; background-color:white; width:75%"  >
        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px; color:black;"> Registration Number </label>
        <input type="text" id="name"  name="name" class="text_field" style=" margin-left: 100px; margin-top: 20px; boder-color: 1px solidblack;" ><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Name </label>
        <label type="text" id="name"  name="name" class="text_field" style=" margin-left: 100px; margin-top: 20px; boder-color: 1px solidblack;" ></label><br>
      
          <label class="label"  style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Father Name </label>
          <input type="text" id="fathername" name="fname" class="text_field" style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

          <label class="label"  style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Email </label>
          <input type="text" id="email" name="Email" class="text_field" style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

          <label class="label"  style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Phone </label>
          <input type="text" id="phone" name="phn" class="text_field" style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

          <label class="label"  style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Address</label>
          <input type="textarea" id="phone" name="phn" class="text_field" style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br><br>
      
      
      </div>
      <!--Subject -->
      <div  id="sub" style="padding:20px; height: 300px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
         <center>
         <input type="text" id ="subjectid" value="" placeholder="Enter your Class"> 
        <button  onclick="selectClass()"  class="w3-bar-item w3-button" > Submit </button>
        </center>

        <div id="Showsub" style="margin-left:200px; margin-top:30px; display:none; background-color:white; width:75%">
          <ul style="text-aligned:left; font-size:25px; padding: 20px;">
        <center> <strong> <li style="background-color:#313A46; color:White;"> Name of your Subjects </li></strong></center><hr>
          <li> English </li><hr>
          <li> Urdu </li><hr>
          <li> Math </li><hr>
          <li> Science</li><hr>
          <li> Pak Study</li><hr>
          <li>History</li><hr>
          </ul>
        </div>
       </div>
<!-- Clas Routine Div -->
       <div  id="routine" style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
       <center><input type="text" id ="subjectid" value="" placeholder="Enter your Class"> 
       <input type="text" id ="subjectid" value="" placeholder="Enter your Section"> 
       <button  onclick="checkRtn()"  class="w3-bar-item w3-button" > Check </button>
        </center>
        <div id="ShowRoutine" style="margin-left:200px; margin-top:30px; display:none; background-color:white; width:75%">
       <center> <table style="cellspacing:5px; cellpadding:2px;"  boder="2px solid black" >
      <th>Days</th><hr>
      <th colspan="5"  ><center>Time </center></th>
      <tr><td>Monday</td>
      <td> English 9:00</td>
      <td> Urdu 10:00</td>
      <td></td>
      <td></td>
      </tr>
      <tr><td>Tuesday</td>
      <td>  </td>
      <td> Science 10:00</td>
      <td>  </td>
      <td> </td>
      </tr>
      <tr><td>Wednesday</td>
      <td> History 9:00</td>
      <td> </td>
      <td> Pak Study 11:00 </td>
      <td> </td> 
      </tr>
      <tr><td>Thursday</td>
      <td> History 9:00</td>
      <td> </td>
      <td>  </td>
      <td>Urdu 12:00 </td>
      </tr>
      <tr><td>Friday</td>
      <td> Scinec 9:00</td>
      <td> </td>
      <td> English 11:00 </td>
      <td> </td>
      </tr>
      <tr><td>Saturday</td>
      <td>  </td>
      <td>Pak Study 10:00 </td>
      <td>  </td>
      <td>English 12:00 </td>
      </tr>
      
      </th>
      </table></center></div>
      </div>    
     <!-- Syllabus -->
     <div  id="syllabus" style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
       <center><input type="text" id ="subjectid" value="" placeholder="Enter your Class"> 
       <input type="text" id ="subjectid" value="" placeholder="Enter your Section"> 
       <button    class="w3-bar-item w3-button" > Check </button>
        </center>

        <div  id="checksyllabus" style=";margin-left:200px; margin-top:30px; display:block; background-color: white; width:75%">
        <table style="cellspacing:5px; cellpadding:2px;">
        <th style="background-color: black; color:white;"> Title  </th>
        <th> Syllabus </th>
        <th> Subject </th>
        </table>
        </div>
        </div> 

        <div id="Marks" style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
          <center>
            <label class="form-control">Select the Exam </label>
            <select id="term" name="term" class="form-control">
              <option value="firstTerm"> First Term </option>
               <option value="firstTerm"> Second Term </option>
                <option value="firstTerm"> Third Term </option>
            </select>
            <input type="text" id ="subjectid" class="form-control" value="" placeholder="Enter your Class">
            <input type="text" id ="subjectid" class="form-control" value="" placeholder="Enter your Section"> 
            <input type="text" id ="subjectid" class="form-control" value="" placeholder="Enter your Subject"> 
            <button class="w3-bar-item w3-button btn-primary"> Check </button>

          </center>

        </div>


 <div id="Grades" style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
  <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
  
   <thead>
        <tr style="background-color: #313a46; color: #ababab;">
            <th>Grade</th>
            <th>Grade Point</th>
            <th>Mark From</th>
            <th>Mark Upto</th>
        </tr>
    </thead>
    <tbody>
    <tr>
      <td>A+</td>
      <td>5.0</td>
      <td>80</td>
      <td>100</td>
  </tr>
    <tr>
      <td>A</td>
      <td>4.0</td>
      <td>70</td>
      <td>79</td>
  </tr>
    <tr>
      <td>A-</td>
      <td>3.50</td>
      <td>60</td>
      <td>69</td>
  </tr>
    <tr>
      <td>B</td>
      <td>3.0</td>
      <td>50</td>
      <td>59</td>
  </tr>
    <tr>
      <td>C</td>
      <td>2.0</td>
      <td>40</td>
      <td>49</td>
  </tr>
    <tr>
      <td>D</td>
      <td>1.0</td>
      <td>33</td>
      <td>39</td>
  </tr>
    <tr>
      <td>F</td>
      <td>0</td>
      <td>0</td>
      <td>32</td>
  </tr>
    </tbody>
</table>
 </div>


</body>

</html>

<Script>
   var home_btn = document.getElementById("home"); 
  var student_btn = document.getElementById("student_Detail");
  var subject_id = document.getElementById("sub");
  var rtn_id = document.getElementById("routine");
  var show_rtn = document.getElementById("ShowRoutine");
  var class_id = document.getElementById("Showsub");
  var syllabus_btn = document.getElementById("syllabus");
  var marks_btn = document.getElementById("Marks")
   var exam_id = document.getElementById("Exam");
    var ac_id = document.getElementById("academic"); 
    var grades = document.getElementById("Grades");

  
  function Hide(){
    home_btn.style.display="none";
    student_btn.style.display="none";
    subject_id.style.display="none"
    rtn_id.style.display="none";
    show_rtn.style.display="none";
    class_id.style.display="none";
    syllabus_btn.style.display="none";
    marks_btn.style.display="none";
    exam_id.style.display="none";
    ac_id.style.display="none";
    grades.style.display="none";

  }
  function Home(){
    document.getElementById("heading").innerHTML="Dashboard";
    if(home_btn.style.display="none"){
      Hide();
      home_btn.style.display="block";
    }
  }
  function checkGrades(){
    document.getElementById("heading").innerHTML="Grades";
    if(grades.style.display=="none"){
      Hide();
      grades.style.display="block";
    }
  }
function checkMarks(){
  document.getElementById("heading").innerHTML="Yours Marks";
  if(marks_btn.style.display=="none"){
    Hide();
    marks_btn.style.display="block";
  }
}
    function Student_detail(){
           document.getElementById("heading").innerHTML="Profile"; 
     if(student_btn.style.display =="none"){

       Hide();
        student_btn.style.display="block";
       
    }else{

     
    }
}
 function checkRtn(){
      if( show_rtn.style.display=="none"){
        show_rtn.style.display="block";
      }
  }

function Syllabus(){
     document.getElementById("heading").innerHTML="Syllabus";
    if( syllabus_btn.style.display=="none"){
        Hide();
        syllabus_btn.style.display="block"
    }
}
function Subject(){
     document.getElementById("heading").innerHTML="Subject";
  if(subject_id.style.display=="none"){
    Hide();    
    subject_id.style.display="block"
       
  }else{

  }
}
function Routine(){
     document.getElementById("heading").innerHTML="Class Routine";
  if(rtn_id.style.display=="none"){
    Hide();
    rtn_id.style.display="block";
  }else{

  }

}
  function Academic(){
  
document.getElementById("heading").innerHTML="Academic"; 
   
    if(ac_id.style.display=="none"){
      Hide();
      ac_id.style.display="block";
    }else{
      ac_id.style.display="none";
    }

  }
  function Exam(){
    document.getElementById("heading").innerHTML="Exam";
   
    if(exam_id.style.display=="none"){
      Hide();
      exam_id.style.display="block";
    }else{
      exam_id.style.display="none";
    }
  }
  function selectClass(){
    
    if( class_id.style.display=="none"){
      class_id.style.display="block";

    }
  }
   
</Script>