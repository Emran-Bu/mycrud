<?php include_once 'header.php' ?>

 <div class="fromDiv">
    <h3>Edit Record</h3>
    <?php
    
        if(isset($_POST['save']))
        {
          
            echo '<h4>Record saved Successfully.</h4>';
    ?>

        <script>
            setTimeout(() => {
                //location.replace('http://localhost/mycrud/index.php');
                location.href = 'http://localhost/mycrud/index.php';
            }, 2000)
        </script>

    <?php
            //header('location:index.php');
        }
    ?>

    <form class="addForm" action="" method="post">
        <div class="form-group">
            <label for="id" name="id">Id</label>
            <input type="number" name="id" id="id">
        </div>

        <div style="margin-bottom: 20px;">
            <input class="submit showInp" type="submit" name="show" id="show" value="show">
        </div>

        <div class="form-group">
            <label for="name" name="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="class" name="class">Class</label>
            <select name="class" id="class">
                <option value="" selected disabled>Select Class</option>
                <option value="1">CSE</option>
                <option value="1">BCOM</option>
                <option value="3">LLB</option>
                <option value="3">EEE</option>
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
            <input class="submit" type="submit" name="save" id="save">
        </div>
        
    </form>
 </div>