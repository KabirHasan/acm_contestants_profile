
<html>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
        <div id="s5"><a class="c" href="index.php">Home</a><a class="c1" href="contestants.php">Contestants</a> <a class="c1" href="teams.php">Teams</a><a class="c1" href="coaches.php">Coaches</a><a class="c1" href="contests.php">Contests</a><a class="c1" href="budgets.php">Budges</a></div>
        <?php
        include('db.php');
        $sql = "SELECT * FROM `budgets`";
        $result = mysqli_query($connect,$sql); ?>
        <ol>
            
        <?php while($row = mysqli_fetch_assoc($result)){
            $val = $row['contest_id'];
            $sql2 = "SELECT * FROM `contests` WHERE contest_id = '$val' ";
            $result2 = mysqli_query($connect,$sql2);
            $row2 = mysqli_fetch_assoc($result2)
            ?>
            <li><a href="budget.php?id=<?php echo $row['budget_id'] ?>"><?= $row['title'] ?><span>&nbsp;&nbsp;&nbsp;for Contest &nbsp;&nbsp;&nbsp;</span></a><a href="contest.php?id=<?= $row2['contest_id'] ?>"><?= $row2['title'] ?></a></li>
                
         <?php } ?>
            </ol>
        </div>
    </body>
</html>