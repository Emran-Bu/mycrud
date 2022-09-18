<?php

    $conn = mysqli_connect("localhost", "root", "", "mycrud");

    $sname = $_POST['name'];
    $sclass = $_POST['class'];
    $saddress = $_POST['address'];
    $sphone = $_POST['phone'];

    if(isset($_FILES['photo'])){
        $pname = mt_rand() . $_FILES['photo']['name'];
        $p_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($p_tmp_name, 'img/'.$pname);
    }

    $sql = "INSERT INTO student (sname, sclass, saddress, sphone, simage) VALUES ('{$sname}', '{$sclass}', '{$saddress}', '{$sphone}', '{$pname}')";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfully");

    session_start();
    $msg = '<h4>Record Added Successfully.</h4>';
    $_SESSION['addMsg'] = $msg;
    
    header('location:http://localhost/mycrud/index.php');

    mysqli_close($conn);

    // echo $pname . $p_tmp_name;
    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';

?>