<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <!-- <form action="formtest.php" method="get">
        name : <input type="text" name="fname" ><br><br>
 
        age : <input type="text" name="age" ><br><br>

        <input type="submit" name="save">
    </form> --><!-- this output is form test -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        name : <input type="text" name="fname" ><br><br>
 
        age : <input type="text" name="age" ><br><br>

        <input type="submit" name="save">
    </form>

    <?php 
    
    if(isset($_POST['save'])){
        echo $_POST['fname'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
    
    ?>

</body>
</html>