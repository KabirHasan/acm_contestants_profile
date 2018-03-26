<html>
    <?php
    include('db.php');
    ?>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
        <div id="s5"><a class="c" href="index.php">Home</a><a class="c1" href="contestants.php">Contestants</a> <a class="c1" href="teams.php">Teams</a><a class="c1" href="coaches.php">Coaches</a><a class="c1" href="contests.php">Contests</a><a class="c1" href="budgets.php">Budges</a></div>
        <div id="t1">
            <?php
            $sql = "SELECT * FROM teams";
            $result = mysqli_query($connect,$sql); ?>
            <ol>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            
                <li><a href="team.php?id=<?=$row['team_id'] ?>" class="s1"> <?= $row['name'] ?></a></li>
            
            <?php }
            ?>
            </ol>
        </div>
        </div>
    </body>
</html>