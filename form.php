<html>
    <?php include('db.php'); ?>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
            
            <form action="insert.php" method="get">
            
            <table >
                <tr> <td>ID</td> <td>:</td> <td><input type="text" name="id"></td> </tr>
                <tr> <td>NAME</td> <td>:</td> <td><input type="text" name="name"></td> </tr>
                <tr> <td>dept</td> <td>:</td> <td><input type="text" name="dept"></td> </tr>
                <tr> <td>email</td> <td>:</td> <td><input type="text" name="email"></td> </tr>
                <tr> <td>contact no</td> <td>:</td> <td><input type="text" name="phone"></td> </tr>
                <tr> <td></td> <td></td> <td><input type="submit"></td></tr>
            </table>
                     
        </form>
        </div>
    </body>
</html>