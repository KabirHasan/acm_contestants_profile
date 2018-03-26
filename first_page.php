<html>
    <?php
    include('db.php');
   
    ?>
    
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        
        <div id="logIn">
        <form id="f_form" action = "sign_in.php" method="post">
            <table>
                <tr><td>Sign In Form</td><td>:</td></tr>
                <tr><td>Username</td><td>:</td><td><input type="text" name="username"></td></tr> <br>
                <tr><td>Password</td><td>:</td><td><input type="password" name="pass"></td></tr> <br>
                <tr><td></td><td></td><td><input type="submit" value="Sign IN !" name="save"></td></tr>
            </table>
        </form>
        
        <p>Haven't a account, then Sign UP</p>
        <a href="sign_up.php">Create an Account</a>
        </div>
       
    </body>
</html>