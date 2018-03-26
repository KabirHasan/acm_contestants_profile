<?php
include('db.php');

 if(isset($_POST['save'])){
     $sql = "INSERT INTO `users`(`email`, `username`, `pass`) VALUES ('{$_POST['email']}','{$_POST['username']}','{$_POST['pass']}') ";
    
    if(mysqli_query($connect,$sql)){
        echo "Your account is Created";
        echo "<a href = 'first_page.php'>Sign In</a>";
        
    }
    else echo "Account is not Created";
    
     
 }
?>