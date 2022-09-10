<?php 

    include_once 'header.php';
    
    $conn = mysqli_connect("localhost", "root", "", "mycrud") or die("Connection Failed");

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $limit = 3;

    $offset = ($page - 1) * $limit;

    $query = "SELECT * FROM student JOIN sclass WHERE student.sclass = sclass.cid LIMIT {$offset}, {$limit}";

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

    if(isset($_SESSION['editMsg']))
    {
        echo $_SESSION['editMsg'];
    }

    if(isset($_SESSION['upMsg']))
    {
        echo $_SESSION['upMsg'];
    }

    if(isset($_SESSION['delMsg']))
    {
        echo $_SESSION['delMsg'];
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
                        $a= $offset+1;
                        
                            while ($row = mysqli_fetch_assoc($result)) {
                               
                        ?>

                        <tr>
                            <td><?= $a++ ?></td>
                            <td><?= $row['sname'] ?></td>
                            <td><?= $row['cname'] ?></td>
                            <td><?= $row['saddress'] ?></td>
                            <td><?= $row['sphone'] ?></td>
                            <td><img src="<?="img/" . $row['simage'] ?>" alt="image"></td>
                            <td>
                                <a href="edit.php?id=<?= $row['sid'] ?>">Edit</a>
                                <a href="deleteInline.php?delete=<?= $row['sid'] ?>">Delete</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

                <!-- /* pagination */ -->
                <?php

                    $query1 = "SELECT * FROM student JOIN sclass WHERE student.sclass = sclass.cid";

                    $result1 = mysqli_query($conn, $query1);

                    $total_record = mysqli_num_rows($result1);

                    $total_page = ceil($total_record/$limit);

                    echo '<div class="page">
                    <ul>';

                    if($page > 1)
                    {
                        echo "<li class=''><a href='index.php?page=". ($page-1) . "'>Prev</a></li>";
                    }

                    for($i=1; $i<=$total_page; $i++)
                    {
                        if($i == $page)
                        {
                            $active = 'pactive';
                        } else{
                            $active = '';
                        }

                        echo "<li ><a class='$active' href='index.php?page={$i}'>{$i}</a></li>";
                    }

                    if($total_page > $page)
                    {
                        echo "<li class=''><a href='index.php?page=". ($page+1) ."'>Next</a></li>";
                    }

                    echo '</ul>
                    </div>';
                ?>
<!-- <div class="page">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div> -->
                <!-- /* pagination */ -->
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