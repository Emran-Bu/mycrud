<?php include_once 'header.php' ?>

 <div class="fromDiv">
    <h3>Add New Record</h3>
    <?php
    
        if(isset($_POST['add']))
        {
            echo '<h4>Record Added Successfully.</h4>';
        }
    ?>
    <form class="addForm" action="" method="post">
        <div class="form-group">
            <label for="name" name="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="class" name="class">Class</label>
            <select name="class" id="class">
                <option value="" selected disabled>Select Class</option>
                <option value="1">CSE</option>
                <option value="2">BCOM</option>
                <option value="3">LLB</option>
                <option value="4">EEE</option>
            </select>
        </div>

        <div class="form-group">
            <label for="address" name="address">Address</label>
            <input type="text" name="address" id="address">
        </div>

        <div class="form-group">
            <label for="phone" name="phone">Phone</label>
            <input type="text" name="phone" id="phone">
        </div>

        <div class="form-group">
            <label for="photo" name="photo">Photo</label>
            <input style="border: 2px dotted;" type="file" name="photo" id="photo">
        </div>

        <div>
            <input class="submit" type="submit" name="add" id="add">
        </div>
        
    </form>
 </div>