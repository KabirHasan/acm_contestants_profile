<html>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
        
        <?php
        include('db.php');
        $val = $_GET['id'];
        $sql = "SELECT id FROM team_contestants WHERE team_id = '{$_GET['id']}'";
        $result = mysqli_query($connect,$sql);
        
        for($j = 0; $j <3 ; $j = $j + 1){
            $row = mysqli_fetch_assoc($result);
            $sql = "SELECT name FROM contestants WHERE id = '{$row['id']}'";
            $result2 = mysqli_query($connect,$sql);
            $row2 = mysqli_fetch_assoc($result2);
            
            $mem[$j] = $row2['name'];
            $mem_id[$j] = $row['id'];
        }
        
        $sql2 = "SELECT * FROM `teams` WHERE team_id = '$val' ";
        $result2 = mysqli_query($connect,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $team_name = $row2['name'];
        $team_id = $row2['team_id'];
        $coach_id = $row2['id'];
        
        
        $sql = "SELECT name FROM faculties WHERE id = '$coach_id' ";
        $result = mysqli_query($connect,$sql);
        
        $row = mysqli_fetch_assoc($result);
        
        $coach_name = $row['name'];
        
        
        ?>
        
        <table id="team">
                <tr><td>Details Info</td><td>:</td></tr>
                <tr><td>Team Name</td> <td>:</td><td><a href="team.php?id=<?=$team_id ?>"><?= $team_name ?></a></td></tr>
                <tr><td>First Member</td><td>:</td><td><a href="contestant.php?id=<?=$mem_id[0] ?>"><?=$mem[0] ?></a></td></tr>
                <tr><td>Second Member</td><td>:</td><td><a href="contestant.php?id=<?=$mem_id[1] ?>"><?=$mem[1] ?></a></td></tr>
                <tr><td>Third Member</td><td>:</td><td><a href="contestant.php?id=<?=$mem_id[2] ?>"><?=$mem[2] ?></a></td></tr>
                <tr><td>Coach</td><td>:</td><td><a href="coach.php?id=<?=$coach_id ?>"><?=$coach_name?></a></td></tr>
        </table>
        </div>
    </body>
</html>