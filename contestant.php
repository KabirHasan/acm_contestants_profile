<html>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php
        include('db.php');
        $sql = "SELECT * FROM contestants WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];

        $sql1 = "SELECT * from team_contestants WHERE id = '{$_GET['id']}'";
        $result2 = mysqli_query($connect,$sql1);
        $row2 = mysqli_fetch_assoc($result2);
        $team_id = $row2['team_id'];

        $sql2 = "SELECT * FROM teams where team_id = '$team_id' ";
        $result3 = mysqli_query($connect,$sql2);
        $row3 = mysqli_fetch_assoc($result3);

        $team_name = $row3['name'];
        $team_id = $row3['team_id'];

        $sql3 = "SELECT * FROM `faculties` WHERE id = '{$row3['id']}' ";
        $result4 = mysqli_query($connect,$sql3);
        $row4 = mysqli_fetch_assoc($result4);

        $coach_name = $row4['name'];

        ?>
        <div class="page">
        <table id="contestant">
            <tr><td>Details Info</td><td>:</td></tr>
            <tr><td>Name</td><td>:</td><td><?= $row['name'] ?></td></tr>
            <tr><td>Id</td><td>:</td><td><?= $row['id'] ?></td></tr>
            <tr><td>Dept</td><td>:</td><td><?= $row['dept'] ?></td></tr>
            <tr><td>Email</td><td>:</td><td><?= $row['email'] ?></td></tr>
            <tr><td>Contact no</td><td>:</td><td><?= $row['phone_no'] ?></td></tr>
            <tr><td>Team Name</td><td>:</td><td><a href="team.php?id=<?php echo $team_id ?>"><?= $team_name ?></a></td></tr>
            <tr><td>Coach Name</td><td>:</td><td><a href="coach.php?id=<?php echo $row4['id'] ?>"><?= $coach_name ?></a></td></tr>
        </table>

        </div>
    </body>
</html>