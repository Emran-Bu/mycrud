<?php

    $delete_id = $_GET['delete'];

    $conn = mysqli_connect("localhost", "root", "", "mycrud") or die('Query Unsuccessfully');

    $sql = "DELETE FROM student WHERE sid = {$delete_id}";

    $result = mysqli_query($conn, $sql) or die('Query Failed');

        
    session_start();
    $msg = '<h4>Record Deleted Successfully</h4>';
    $_SESSION['delMsg'] = $msg;

    header('location: index.php');

    mysqli_close($conn);

?>