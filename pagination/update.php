<?php include_once 'header.php' ?>

 <div class="fromDiv">
    <h3>Update Record</h3>

    <form class="addForm1" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="id" name="id">Id</label>
            <input type="number" name="id" id="id">
        </div>

        <div style="margin-bottom: 20px;">
            <input class="submit showInp" type="submit" name="show" id="show" value="show">
        </div>
    </form>

<?php
    
    if(isset($_POST['show']))
    {
        $sid = $_POST['id'];

        $conn = mysqli_connect("localhost", "root", "", "mycrud") or die('Query Unsuccessfully');

        $sql = "SELECT * FROM student WHERE sid = {$sid}";

        $result = mysqli_query($conn, $sql) or die('Query Failed');

        if(mysqli_num_rows($result)>0)
        {
            while ($row = mysqli_fetch_assoc($result)) {

?>

    <form class="addForm" action="updateData.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name" name="name">Name</label>
            <input type="hidden" name="id" id="id" value="<?= $row['sid'] ?>">
            <input type="text" name="name" id="name" value="<?= $row['sname'] ?>">
        </div>

        <div class="form-group">
            <label for="class" name="class">Class</label>
            <select name="class" id="class">
                <?php
                
                $query1 = "SELECT * FROM sclass";
    
                $result1 = mysqli_query($conn, $query1) or die("Query Unsuccessfully");
            
                if(mysqli_num_rows($result1)>0)
                {
                    while($row1 = mysqli_fetch_assoc($result1))
                    {

                        if($row['sclass'] == $row1['cid'])
                        {
                            $select = 'selected';
                        } else {
                            $select = '';
                        }
                
                ?>
                <option <?= $select ?> value="<?= $row1['cid'] ?>"><?= $row1['cname'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="address" name="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $row['saddress'] ?>">
        </div>

        <div class="form-group">
            <label for="phone" name="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?= $row['sphone'] ?>">
        </div>

        <div class="form-group">
            <label for="photo" name="photo">Photo</label>
            <input style="border: 2px dotted;" type="file" name="photo" id="photo">
        </div>

        <div class="form-group">
            <label for="photo" name="photo"></label>
            <img style="height:90px; width:120px; margin-left:40%" src="img/<?= $row['simage'] ?>" />
            <input type="hidden" name="old_img" value="<?= $row['simage'] ?>">
        </div>

        <div>
            <input class="submit" type="submit" name="update" id="update">
        </div>
        
    </form>
    <?php
            
                }
            }
        }
    ?>
 </div>