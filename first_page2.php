<html>
    <?php
    include('db.php');
   
    ?>
    
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        
        <div class="admin">
        <form id="f_form" action = "sign_in2.php" method="post">
            <table>
                <tr><td>Username</td><td>:</td><td><input type="text" name="username"></td></tr> <br>
                <tr><td>Password</td><td>:</td><td><input type="password" name="pass"></td></tr> <br>
                <tr><td></td><td></td><td><input type="submit" value="Sign IN !" name="save"></td></tr>
            </table>
        </form>
        </div>
       
    </body>
</html>