<html>
    <?php
    include('db.php');
    ?>
    
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div class="page">
        
        <table style = "margin:5px 0 0 150px ">
            <tr>
                <th>ID</th> <th>NAME</th> <th>dept</th> <th>@email</th> <th>contact</th> <th>Operation</th>
            </tr>
            
            <a href="form.php" style="margin:5px 0 0 150px">Add New</a>
            
            <?php $result = mysqli_query($connect,"select * from contestants");
            while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?= $row['id'] ?></td> <td><a href="contestant.php?id=<?= $row['id']?>"><?= $row['name'] ?></a></td> <td><?= $row['dept'] ?></td> <td><?= $row['email'] ?></td> <td><?= $row['phone_no'] ?></td>
                <td><a href="edit_form.php?id=<?php echo $row['id'] ?>">edit</a>
                <a href="delete.php?id=<?php echo $row['id'] ?>">delete</a> </td>
                <?php } ?>
            </tr>
        </table>
        </div>
    </body>
</html>