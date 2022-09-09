<?php

    include 'header.php';

    if(isset($_POST['delete']))
    {
        $delete_id = $_POST['sid'];

        $conn = mysqli_connect("localhost", "root", "", "mycrud") or die('Query Unsuccessfully');

        $sql = "DELETE FROM student WHERE sid = {$delete_id}";
    
        $result = mysqli_query($conn, $sql) or die('Query Failed');
    
            
        session_start();
        $msg = '<h4>Record Deleted Successfully</h4>';
        $_SESSION['delMsg'] = $msg;
    
        header('location: index.php');
    
        mysqli_close($conn);
    }

?>

<div class="deleteForm">
    <h3>Delete Record</h3>
    <?php
    
        if(isset($_POST['delete']))
        {
            echo '<h4>Record Deleted Successfully.</h4>';
        }
    ?>

    <script>
        // setTimeout(()=>{
        //     location.replace('http://localhost/mycrud/index.php');
        // }, 2000);
    </script>

    <form class="addForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="sid" name="sid">Id</label>
            <input type="number" name="sid" id="sid">
        </div>

        <div>
            <input class="submit showInp" type="submit" name="delete" id="delete" value="delete">
        </div>
    </form>
</div>