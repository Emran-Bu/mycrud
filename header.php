
<?php 
    $url = $_SERVER['PHP_SELF'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <title>My_CRUD</title>
</head>
<body>
    <!-- start main div -->

    <div class="mainDiv">
         <!-- start header div -->
        <div class="header">
            <h1>My CRUD</h1>
        </div>
         <!-- end header div -->

          <!--start menu div -->
        <div class="menuDiv">
            <ul>
                <li><a class="<?= $url=='/mycrud/index.php'? 'active':''; ?>" href="index.php">Home</a></li>
                <li><a class="<?= $url=='/mycrud/add.php'? 'active':''; ?>" href="add.php">Add</a></li>
                <li><a class="<?= $url=='/mycrud/update.php'? 'active':''; ?>" href="update.php" href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>
            </ul>
        </div>
         <!-- end main div -->