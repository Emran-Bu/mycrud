<?php

    include 'header.php';

    if(isset($_POST['delete']))
    {
        //header('location:index.php');
    }
    //print_r($_POST);

    // echo $_POST['id'];
    // echo $_POST['delete'];

?>

<div class="deleteForm">
    <h3>Delete Record</h3>
    <?php
    
        if(isset($_POST['delete']))
        {
            echo '<h4>Record Deleted Successfully.</h4>';
        }
    ?>
    <form class="addForm" action="" method="post">
        <div class="form-group">
            <label for="sid" name="sid">Id</label>
            <input type="number" name="sid" id="sid">
        </div>

        <div>
            <input class="submit showInp" type="submit" name="delete" id="delete" value="delete">
        </div>
    </form>
</div>