<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass =  "";
$dbname ="sms";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <div>
    <b> Choose Image </b>
    <input type="file" id="imgg" name="imgg">
    <input type="submit" name="send" value="upload">
    </form>
    </div>
    <form method="post" enctype="multipart/form-data">
    <div>
    <input type="submit" name="show">
    </div>
    </form>
</body>
</html>

<?php
if(isset($_POST['send']))
{
    $image = addslashes(file_get_contents($_FILES["imgg"]["tmp_name"]));
    $query = "insert into image values('$image')";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('Image Inserted');</script>";
    }
}
if(isset($_POST['show']))
{
    $qry = "select img from image";
    $runqry = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_array($runqry))
    {
        echo '<img class="image" src="data:image/png;base64,'.base64_encode($row['img']).'" />';
    }
    // echo "<script>alert('Here we go');</script>";
}
$conn -> close();
?>