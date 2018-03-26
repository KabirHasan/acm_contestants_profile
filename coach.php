<html>
    <?php
    include('db.php');
    ?>
    
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
            
            <?php
            $val = $_GET['id'];
            $sql = "SELECT * FROM teams WHERE id = '$val' ";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($result);
            $team_name = $row['name'];
            $team_id = $row['team_id'];
            $sql = "SELECT * FROM faculties WHERE id = '$val' ";
            //$result = mysqli_query($connect,"SELECT DISTINCT name,faculties.id FROM faculties JOIN contacts WHERE faculties.id = contacts.id");
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($result);
            
                
                $result2 = mysqli_query($connect,"SELECT teams.name as team, faculties.name FROM `teams` JOIN faculties WHERE teams.id = faculties.id");
                $result3 = mysqli_query($connect,"SELECT name, phone_no FROM faculties JOIN contacts WHERE faculties.id = contacts.id");
                
                $name = $row['name'];
                
                
               
                $i = 0;
                while($row3 = mysqli_fetch_assoc($result3)) {
                    
                    if($row['name'] == $row3['name']) { $phone[$i] = $row3['phone_no']; $i = $i + 1; }
                } ?>
            <div class="page">    
            <table id="coach">
                <tr style="color:blue;"><td>Details Info</td><td>:</td></tr>
                <tr><td>Name</td><td>:</td><td><a href="coach.php?id=<?= $row['id'] ?>"><?=$row['name'] ?></a></td></tr>
                <tr><td>Dept</td><td>:</td><td><?=$row['dept'] ?></td></tr>
                <tr><td>email</td><td>:</td><td><?=$row['email'] ?></td></tr>
                <tr><td>Contact No</td><td>:</td><td><?php for($j = 0 ; $j < $i; $j = $j + 1){ echo $phone[$j]; echo "&nbsp";echo "&nbsp";echo "&nbsp"; } ?></td></tr>
                <tr><td>Coach of Team</td><td>:</td><td><a href="team.php?id=<?= $team_id ?>"><?=$team_name ?></a></td></tr>
            </table>       
    
        </div>
    </body>
</html>