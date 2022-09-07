<?php 

    include_once 'header.php';
    
    $conn = mysqli_connect("localhost", "root", "", "mycrud") or die("Connection Failed");

    $query = "SELECT * FROM student JOIN sclass WHERE student.sclass = sclass.cid";

    $result = mysqli_query($conn, $query) or die("Query Unsuccessfully");

    if(mysqli_num_rows($result)>0)
    {

?>
          <!-- star table div -->
          <div class="tableDiv">
            <h3>All Students Records</h3>
<?php
    session_start();
    if(isset($_SESSION['addMsg']))
    {
        echo $_SESSION['addMsg'];
    }
?>

<script>
    setTimeout(()=>{
        <?php
            session_unset(); 
            session_destroy();   
        ?>
    },3000);
</script>
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
                                <a href="edit.php?id=<?= $row['sid'] ?>">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <?php
            } else {
                echo '<h3>No Records Found</h3>';
            } 

            mysqli_close($conn);
            
            ?>
          </div>
           <!-- end table div -->

         <!-- end main div -->
    </div>
</body>
</html>