<?php

    include 'header.php';

    if(isset($_POST['delete']))
    {
       
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
        setTimeout(()=>{
            location.replace('http://localhost/mycrud/index.php');
        }, 2000);
    </script>

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