<html>
    <?php include('db.php'); 
    $val = $_GET['id'];
    
    $sql = "SELECT * FROM `contestants` WHERE id ='$val' ";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    
    $sql2 = "DELETE FROM `contestants` WHERE id ='$val' ";
    mysqli_query($connect,$sql2);

    ?>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            
            <form action="insert.php" method="get">
            new Contestants
            
            
            <table id="form">
                <tr> <td>ID</td> <td>:</td> <td><input type="text" name="id" value="<?php echo $row['id'] ?> "></td> </tr>
                <tr> <td>NAME</td> <td>:</td> <td><input type="text" name="name" value="<?php echo $row['name'] ?> "></td> </tr>
                <tr> <td>dept</td> <td>:</td> <td><input type="text" name="dept" value="<?php echo $row['dept'] ?> "></td> </tr>
                <tr> <td>email</td> <td>:</td> <td><input type="text" name="email" value="<?php echo $row['email'] ?> "></td> </tr>
                <tr> <td>contact no</td> <td>:</td> <td><input type="text" name="phone" value="<?php echo $row['phone_no'] ?> "></td> </tr>

                <tr> <td></td> <td></td> <td><input type="submit"></td></tr>
            </table>
                     
        </form>
        
    </body>
</html>