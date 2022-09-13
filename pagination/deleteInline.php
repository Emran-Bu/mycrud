<?php

    $delete_id = $_GET['delete'];

    $conn = mysqli_connect("localhost", "root", "", "mycrud") or die('Query Unsuccessfully');

    $sql1 = "SELECT * FROM student WHERE sid = $delete_id";

    $result = mysqli_query($conn, $sql1) or die('Query Unsuccessfully');

    $row = mysqli_fetch_assoc($result);

    $delete_image = $row['simage'];

    unlink('img/'.$delete_image);

    $sql = "DELETE FROM student WHERE sid = {$delete_id}";

    $result = mysqli_query($conn, $sql) or die('Query Failed');

        
    session_start();
    $msg = '<h4>Record Deleted Successfully</h4>';
    $_SESSION['delMsg'] = $msg;

    header('location: index.php');

    mysqli_close($conn);

?>