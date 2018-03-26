<html>
    <?php
    include('db.php');
    $id = $_GET['id'];
    $name = $_GET['name'];
    $dept = $_GET['dept'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    
    $sql = "INSERT INTO `contestants`(`id`, `name`, `dept`, `email`, `phone_no`) VALUES ('$id','$name','$dept','$email','$phone')";
    
    if(mysqli_query($connect,$sql)){
    header('location:all_contestants.php');}
    
    ?>
</html>