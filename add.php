<?php include_once 'header.php' ?>

 <div class="fromDiv">
    <h3>Add New Record</h3>
    <form class="addForm" action="addData.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" name="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="class" name="class">Class</label>
            <select name="class" id="class">
                <option value="" selected disabled>Select Class</option>

                <?php

                    $conn = mysqli_connect('localhost', 'root', '', 'mycrud') or die("Connection Failed");

                    $sql = 'SELECT * FROM sclass';

                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfully");

                    if(mysqli_num_rows($result)>0)
                    {
                ?>

                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?= $row['cid'] ?>"><?= $row['cname'] ?></option>
                <?php
                        }

                    } else {
                        echo '<option>No Class Found</option>';
                    }

                    mysqli_close($conn);
                ?>
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