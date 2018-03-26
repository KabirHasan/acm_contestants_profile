<?php
include('db.php');

 if(isset($_POST['save'])){
   
    
    $sql = "SELECT * FROM users WHERE username ='{$_POST['username']}' AND pass ='{$_POST['pass']}'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
   
    if($row > 0){
        header('location:index2.php');
    }
    else{
        echo "Hey, Your Username or Password is Incorrect ";
    }
     
    
    
     
 }
?>