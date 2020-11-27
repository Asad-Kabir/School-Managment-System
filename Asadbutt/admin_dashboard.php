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

    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
    #shadow {
        border: 0px solid;
        /* padding: 15px; */

        box-shadow: 10px -10px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
    }

    .shad {
        box-shadow: 10px -10px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0.1, 0.1);
    }

    tr,
    td,
    th {
        padding: 1vw;
        /* border: 1px solid black; */
    }

    table {
        border: none;
        /* text-align:center; */
    }
    </style>
</head>

<body style="background-color:#F4F6F9;  font-family: Lato, sans-serif;">
    <div class="header" style="background-color:#313A46; ">
        <label class="header-center" style="color:white; font-style:bold; font-size:25px  ;"> School managment System
        </label>
        <div class="header-right">
            <a href="Logout.php" class="btn btn-info " style="cursor:not-allowed; pointer-events: ;">
                <span class="glyphicon glyphicon-log-out"></span> Log out
            </a>
        </div>
    </div>
    <div id="shadow" class="w3-sidebar w3-scroll w3-bar-block w3-white w3-large"
        style=" width:170px; height:100%; margin-top:30px; margin-left: 30px ">
        <center>
            <div><i class="fa fa-user"></i></div>
            <p><?php echo $_SESSION['username'] ;?></p>
        </center>
        <hr>
        <button onclick="Home()" class="w3-bar-item w3-button  "><i class="fa fa-home"></i> Dashboard</button>

        <button onclick="user()" class="w3-bar-item w3-button "><i class="fa fa-user"></i> User</button>
        <div id="User" style="display:none">
            <ul type="none">
                <li>
                    <button onclick="Subject()" class="w3-bar-item w3-button w3-small">Teacher</button>
                </li>
                <li>
                    <button onclick="Student()" class="w3-bar-item w3-button w3-small">Student</button>
                </li>
                <li>
                    <button onclick="Admission()" class="w3-bar-item w3-button w3-small">Admission</button>
                </li>

            </ul>
        </div>

        <button onclick="Academic()" class="w3-bar-item w3-button "><i class="fa fa-graduation-cap"></i>
            Academic</button>
        <div id="academic" style="display:none">
            <ul type="none">
                <li>
                    <button onclick="Subject()" class="w3-bar-item w3-button w3-small">Subjects</button>
                </li>
                <li>
                    <button onclick="Student1()" class="w3-bar-item w3-button w3-small">Class Routine</button>
                </li>
                <li>
                    <button onclick="Syllabus()" class="w3-bar-item w3-button w3-small">Syllabus</button>
                </li>
                <li>
                    <button class="w3-bar-item w3-button w3-small">Daily Attendence</button>
                </li>
            </ul>
        </div>

        <button onclick="Exam()" class="w3-bar-item w3-button"><i class="fa fa-globe"> </i> Exam</button>
        <div id="Exam" style="display: none;">

            <ul>
                <li>
                    <button onclick="checkMarks()" class="w3-bar-item w3-button w3-small"> Marks</button>
                </li>
                <li> <button onclick="checkGrades()" class="w3-bar-item w3-button w3-small">Grades</button>
                </li>
            </ul>
        </div>

        <button class="w3-bar-item w3-button"><i class="fa fa-check"></i> Fee Detail</button>
        <hr>

    </div>


    <div id="shadow" style="margin-left:235px;margin-top:30px; width: 80%; background-color:white; height:20%;">

        <div class="w3-container ">

            <h2 id="heading" style="color:black;">Dashboard</h2>

        </div>

    </div>
    <!-- Home Page Div -->
    <div id="home" style="display:display;margin-top:10px; ">
        <div id="shadow" style=" padding:20px;  margin-left:240px;margin-top:50px; width: 20%; background-color:white;">

            <i style="" class="fa fa-user"><b> Students</b></i><br>
            <h1> 12 </h1><br>
            <p> Total Number of Student</p>
        </div>

        <div id="shadow" style=" padding:20px;margin-left:550px;margin-top:-170px; width: 20%; background-color:white;">
            <div class="w3-bar-item ">
                <i class="fa fa-user"> <strong>Teacher</strong></i><br>
                <h1> 5 </h1><br>
                <p> Total Number of Teachers</p>
            </div>
        </div>
    </div>

    <!-- User Div -->
    <div id="student_Detail"
        style="margin-left:290px; margin-top:30px; display:none; background-color:white; width:75%">
        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px; color:black;">
            Registration Number </label>
        <input type="text" id="name" name="name" class="text_field"
            style=" margin-left: 100px; margin-top: 20px; boder-color: 1px solidblack;"><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Name
        </label>
        <label type="text" id="name" name="name" class="text_field"
            style=" margin-left: 100px; margin-top: 20px; boder-color: 1px solidblack;"></label><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Father
            Name </label>
        <input type="text" id="fathername" name="fname" class="text_field"
            style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Email
        </label>
        <input type="text" id="email" name="Email" class="text_field"
            style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;"> Phone
        </label>
        <input type="text" id="phone" name="phn" class="text_field"
            style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br>

        <label class="label" style="  margin-left: 100px; font-weight: bold;  margin-top: 20px;  color:black;">
            Address</label>
        <input type="textarea" id="phone" name="phn" class="text_field"
            style=" margin-left: 100px; margin-top: 20px;  boder-color: 1px solidblack;"><br><br>


    </div>
    <!--Subject -->
    <div class="shad" id="sub"
        style="padding:20px; height: 300px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
        <center>
            <input type="text" id="subjectid" value="" placeholder="Enter your Class">
            <button onclick="selectClass()" class="w3-bar-item w3-button"> Submit </button>
        </center>

        <div id="Showsub" style="margin-left:200px; margin-top:30px; display:none; background-color:white; width:75%">
            <ul style="text-aligned:left; font-size:25px; padding: 20px;">
                <center> <strong>
                        <li style="background-color:#313A46; color:White;"> Name of your Subjects </li>
                    </strong></center>
                <hr>
                <li> English </li>
                <hr>
                <li> Urdu </li>
                <hr>
                <li> Math </li>
                <hr>
                <li> Science</li>
                <hr>
                <li> Pak Study</li>
                <hr>
                <li>History</li>
                <hr>
            </ul>
        </div>
    </div>
    <!-- User Student Div -->
    <div class="shad" id="student"
        style="padding:20px;margin-left:220px; margin-top:30px; display:none; background-color: #FFFAFA; width:80%">
        <div class="header-right " style="padding: 5px; ">
            <button onclick="Admission()" class="btn btn-circle button2 w3-large  " style="padding: 5px;">
                <span class="glyphicon glyphicon-plus "></span> Add New Student
            </button>
        </div>
        <center><input type="text" id="subjectid" value="" placeholder="Enter your Class">
            <input type="text" id="subjectid" value="" placeholder="Enter your Section">
            <button onclick="checkRtn()" class="w3-bar-item w3-button"> Check </button>
        </center>
        <div id="ShowRoutine"
            style="margin-left:200px; margin-top:30px; display:none; background-color:white; width:75%">
            <center>
                <table style="cellspacing:5px; cellpadding:2px;" boder="2px solid black">
                    <th>Days</th>
                    <hr>
                    <th colspan="5">
                        <center>Time </center>
                    </th>
                    <tr>
                        <td>Monday</td>
                        <td> English 9:00</td>
                        <td> Urdu 10:00</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td> </td>
                        <td> Science 10:00</td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td> History 9:00</td>
                        <td> </td>
                        <td> Pak Study 11:00 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td> History 9:00</td>
                        <td> </td>
                        <td> </td>
                        <td>Urdu 12:00 </td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td> Scinec 9:00</td>
                        <td> </td>
                        <td> English 11:00 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td> </td>
                        <td>Pak Study 10:00 </td>
                        <td> </td>
                        <td>English 12:00 </td>
                    </tr>

                    </th>
                </table>
            </center>
        </div>
    </div>

    <!-- user Student Div End-->
    <!-- Syllabus -->
    <div id="syllabus"
        style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
        <center><input type="text" id="subjectid" value="" placeholder="Enter your Class">
            <input type="text" id="subjectid" value="" placeholder="Enter your Section">
            <button class="w3-bar-item w3-button"> Check </button>
        </center>

        <div id="checksyllabus"
            style=";margin-left:200px; margin-top:30px; display:block; background-color: white; width:75%">
            <table style="cellspacing:5px; cellpadding:2px;">
                <th style="background-color: black; color:white;"> Title </th>
                <th> Syllabus </th>
                <th> Subject </th>
            </table>
        </div>
    </div>

    <div id="Marks"
        style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
        <center>
            <label class="form-control">Select the Exam </label>
            <select id="term" name="term" class="form-control">
                <option value="firstTerm"> First Term </option>
                <option value="firstTerm"> Second Term </option>
                <option value="firstTerm"> Third Term </option>
            </select>
            <input type="text" id="subjectid" class="form-control" value="" placeholder="Enter your Class">
            <input type="text" id="subjectid" class="form-control" value="" placeholder="Enter your Section">
            <input type="text" id="subjectid" class="form-control" value="" placeholder="Enter your Subject">
            <button class="w3-bar-item w3-button btn-primary"> Check </button>

        </center>

    </div>


    <div id="Grades"
        style="padding:20px;margin-left:300px; margin-top:30px; display:none; background-color: #FFFAFA; width:75%">
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
    <div id="admission" class="shad" style="margin-left:235px;width:80%; margin-top:30px; display:none;">
        <table style="width:100%;">
            <form method="post" enctype="multipart/form-data">
                <th colspan="2" style=" background-color:#727CF5;  text-align:center; color:white; "> Student Admission
                </th>
                <tbody>
                    <tr>
                        <td>
                            <label style="width:200px;">Roll Number</label>
                        </td>
                        <td> <input type="Text" name="srollno" id="rollnoid" placeholder="Enter student Roll no"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Name</label>
                        </td>
                        <td> <input type="Text" name="sname" id="nameid" placeholder="Enter student Name"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>

                    <tr>
                        <td>
                            <label style="width:200px;">Email</label>
                        </td>
                        <td> <input type="email" name="semail" id="emailid" placeholder="Enter student email"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Password</label>
                        </td>
                        <td> <input type="Text" name="spassword" id="passwordid" placeholder="Enter student password"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Father Name</label>
                        </td>
                        <td> <input type="Text" name="sfathername" id="fathername"
                                placeholder="Enter Student Father Name"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Class</label>
                        </td>
                        <td><select name="class"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required>
                                <option>
                                    Selct A Class
                                </option>
                                <option>
                                    Class One
                                </option>
                                <option>
                                    Class Two
                                </option>
                                <option>
                                    Class Three
                                </option>
                                <option>
                                    Class Four
                                </option>
                                <option>
                                    Class five
                                </option>
                                <option>
                                    Class Six
                                </option>
                                <option>
                                    Class Seven
                                </option>
                                <option>
                                    Class Eight
                                </option>
                                <option>
                                    Class Nine
                                </option>
                                <option>
                                    Class Ten
                                </option>
                            </select> </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Section</label>
                        </td>
                        <td><select name="section"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required>
                                <option>
                                    Selct A Section
                                </option>
                                <option>
                                    A
                                </option>
                                <option>
                                    B
                                </option>
                                <option>
                                    C
                                </option>

                            </select> </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Gender</label>
                        </td>
                        <td><select name="gender"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required>
                                <option>
                                    Selct A Gender
                                </option>
                                <option>
                                    Male
                                </option>
                                <option>
                                    Female
                                </option>
                                <option>
                                    Others
                                </option>

                            </select> </td>
                    </tr>
                    <tr>
                        <td style="text-align:top left;"><label>Birthday</label></td>
                        <td> <input type="date" name="birthday" id="birthdayid" placeholder="dd/mm/yyyy"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    </tr>
                    <tr>
                        <td><label>Address</label></td>
                        <td> <textarea name="address" id="aaddressid" rows="5" column="100"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px;" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Phone </label>
                        </td>
                        <td> <input type="text" name="sphone" id="phoneid" placeholder="Enter student Phone"
                                style="border:1px solid#D3D3D3 ; border-radius:5px; width: 800px; height:30px;"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <label style="width:200px;">Student Profile Image </label>
                        </td>
                        <!-- <td> <input type="file" src="" name="sphone" id="phoneid" placeholder="Enter student Phone" style="border:1px solid#D3D3D3 ; border-radius:5px; width: 300px; height:300px;"></td> -->
                        <td><label for="photo"> Upload An Image </label>
                            <input id="photo" type="file" name="photo">
                        </td>
                    </tr>
                </tbody>

                <tr>
                    <td></td>
                    <td><button name="addStudent" class="btn btn-primary">Add Student</button></td>
                </tr>
            </form>
        </table>
    </div>
    <hr>
</body>

</html>
<?php
 error_reporting(E_ALL & ~E_NOTICE);
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass =  "";
 $dbname ="sms";

 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


 if(isset($_POST['addStudent']) && isset($_FILES['photo']) ){
  if(!$conn){
    die("Connection Failed : %s\n".$conn ->error);
}else{

  $rollno = $_POST['srollno'];
 $name = $_POST['sname'];
 $email = $_POST['semail'];
 $password = $_POST['spassword'];
 $fatherName = $_POST['sfathername'];
 $class = $_POST['class'];
 $section= $_POST['section'];
 $gender = $_POST['gender'];
 $dob = $_POST['birthday'];
 $address = $_POST['address'];
 $phone = $_POST['sphone'];
 $pic = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

 echo "<pre>";
 print_r($_FILES['photo']);
 echo "</pre>";
//   if(isset($_FILES["photo"]) && ($_FILES["photo"]["error"]) == 0){
//      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif",
//       "png" => "image/png");
//      $filename = $_FILES["photo"]["name"];
//      $filetype = $_FILES["photo"]["type"];
//      $filesize = $_FILES["photo"]["size"];

//      // Verify file extension
//      $ext = pathinfo($filename, PATHINFO_EXTENSION);
//      if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

//      // Verify file size - 5MB maximum
//      $maxsize = 5 * 1024 * 1024;
//      if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
//      // Verify MYME type of the file
//      if(in_array($filetype, $allowed)){
//          // Check whether file exists before uploading it
//          if(file_exists("upload/" . $filename)){
//              echo $filename . " is already exists.";
//          } else{
//            $pic = $_FILES["photo"]["tmp_name"];
//              // move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
//              // echo "Your file was uploaded successfully.";
//          } 
//      } else{
//          echo "Error: There was a problem uploading your file. Please try again."; 
//      }
//  } else{
//      echo "<script>alert('Error ');</script>" . $_FILES["photo"]["error"];
//  }
}


  $insert ="INSERT INTO addstudent(name,email,pass,fathername,class,section,gender,dob,address,phone,image) VALUES('$name','$email','$password','$fatherName','$class',
  '$section','$gender','$dob','$address','$phone','$pic') ";
  if(mysqli_query($conn, $insert)){
    echo "<script>alert('successfully');</script>";
} else{
    echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
}
 
// Close connection
// mysqli_close($conn);
$conn->close();

 }

?>
<Script>
var home_btn = document.getElementById("home");
var student_btn = document.getElementById("student_Detail");
var subject_id = document.getElementById("sub");
var rtn_id = document.getElementById("student");
var show_rtn = document.getElementById("ShowRoutine");
var class_id = document.getElementById("Showsub");
var syllabus_btn = document.getElementById("syllabus");
var marks_btn = document.getElementById("Marks")
var exam_id = document.getElementById("Exam");
var ac_id = document.getElementById("academic");
var grades = document.getElementById("Grades");
var admission_id = document.getElementById("admission")
var get_user = document.getElementById("User");

function Hide() {
    home_btn.style.display = "none";
    student_btn.style.display = "none";
    subject_id.style.display = "none"
    rtn_id.style.display = "none";
    show_rtn.style.display = "none";
    class_id.style.display = "none";
    syllabus_btn.style.display = "none";
    marks_btn.style.display = "none";
    exam_id.style.display = "none";
    ac_id.style.display = "none";
    grades.style.display = "none";
    get_user.style.display = "none";
    admission_id.style.display = "none";


}

function Admission() {
    document.getElementById("heading").innerHTML = "Student Admission Form";
    if (admission_id.style.display == "none") {
        Hide();
        admission_id.style.display = "block";
    }
}

function user() {
    document.getElementById("heading").innerHTML = "User";
    if (get_user.style.display == "none") {

        get_user.style.display = "block"
    } else {
        get_user.style.display = "none"
    }
}

function Home() {
    document.getElementById("heading").innerHTML = "Dashboard";
    if (home_btn.style.display = "none") {
        Hide();
        home_btn.style.display = "block";
    }
}

function checkGrades() {
    document.getElementById("heading").innerHTML = "Grades";
    if (grades.style.display == "none") {
        Hide();
        grades.style.display = "block";
    }
}

function checkMarks() {
    document.getElementById("heading").innerHTML = "Yours Marks";
    if (marks_btn.style.display == "none") {
        Hide();
        marks_btn.style.display = "block";
    }
}

function Student_detail() {
    document.getElementById("heading").innerHTML = "Profile";
    if (student_btn.style.display == "none") {

        Hide();
        student_btn.style.display = "block";

    } else {


    }
}

function checkRtn() {
    if (show_rtn.style.display == "none") {
        show_rtn.style.display = "block";
    }
}

function Syllabus() {
    document.getElementById("heading").innerHTML = "Syllabus";
    if (syllabus_btn.style.display == "none") {
        Hide();
        syllabus_btn.style.display = "block"
    }
}

function Subject() {
    document.getElementById("heading").innerHTML = "Subject";
    if (subject_id.style.display == "none") {
        Hide();
        subject_id.style.display = "block"

    } else {

    }
}

function Student() {
    document.getElementById("heading").innerHTML = " Student";
    if (rtn_id.style.display == "none") {
        Hide();
        rtn_id.style.display = "block";
    } else {

    }

}

function Academic() {

    document.getElementById("heading").innerHTML = "Academic";

    if (ac_id.style.display == "none") {
        Hide();
        ac_id.style.display = "block";
    } else {
        ac_id.style.display = "none";
    }

}

function Exam() {
    document.getElementById("heading").innerHTML = "Exam";

    if (exam_id.style.display == "none") {
        Hide();
        exam_id.style.display = "block";
    } else {
        exam_id.style.display = "none";
    }
}

function selectClass() {

    if (class_id.style.display == "none") {
        class_id.style.display = "block";

    }
}

function addStudent() {
    document.getElementById("heading").innerHTML = "Student Admission Form";

}
</Script>