<?php

$stu_id = $_POST['sid'];
$sname = $_POST['name'];
$sclass = $_POST['class'];
$address = $_POST['address'];
$phone = $_POST['phone'];

   if(!($_FILES['photo']['name']))
   {
    $photo_name = $_POST['old_img'];
   } else {
    $photo_name = mt_rand().$_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];

    $old_image = 'img/'.$_POST['old_img'];

    if(isset($old_image))
    {
        unlink($old_image);
    }

    move_uploaded_file($photo_tmp_name, 'img/'.$photo_name);
   }

$conn = mysqli_connect('localhost', 'root', '', 'mycrud') or die('Connection Failed');

echo $sql = "UPDATE student SET sname = '{$sname}', sclass = {$sclass}, saddress = '{$address}', sphone = '{$phone}', simage = '{$photo_name}' WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query unsuccessfully");

session_start();
$msg = '<h4>Record Edited Successfully</h4>';
$_SESSION['editMsg'] = $msg;

header('location: index.php');

mysqli_close($conn);

?>