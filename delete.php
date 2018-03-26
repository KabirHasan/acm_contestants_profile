<html>
    <?php
    
    include('db.php'); 
    $val = $_GET['id'];
    $sql = "DELETE FROM `contestants` WHERE id = '$val' ";
    mysqli_query($connect,$sql);
    
    header('location:all_contestants.php');
    
    ?>
    
</html>