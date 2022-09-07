<?php 

    include_once 'header.php';
    
    $conn = mysqli_connect("localhost", "root", "", "mycrud") or die("Connection Failed");

    $query = "SELECT * FROM student JOIN sclass WHERE student.sclass = sclass.cid";

    $result = mysqli_query($conn, $query) or die("Query Unsuccessfully");

    if(mysqli_num_rows($result)>0)
    {
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

        
    
?>


          <!-- star table div -->
          <div class="tableDiv">
            <h3>All Students Records</h3>
<?php
    
    if(isset($_POST['save']))
    {
        // header('location:index.php');
        echo '<h4>Record saved Successfully.</h4>';
    }
?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            while ($row = mysqli_fetch_assoc($result)) {
                               
                        ?>

                        <tr>
                            <td><?= $row['sid'] ?></td>
                            <td><?= $row['sname'] ?></td>
                            <td><?= $row['cname'] ?></td>
                            <td><?= $row['saddress'] ?></td>
                            <td><?= $row['sphone'] ?></td>
                            <td><img src="<?="img/" . $row['simage'] ?>" alt="image"></td>
                            <td>
                                <a href="edit.php">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
          </div>
           <!-- end table div -->

         <!-- end main div -->
    </div>
</body>
</html>