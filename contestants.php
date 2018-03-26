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
      
            
            <ol>
            <?php $result = mysqli_query($connect,"select * from contestants");
            while($row = mysqli_fetch_assoc($result)){ ?>
                <li><a href="contestant.php?id=<?php echo $row['id'] ?>"><?= $row['name'] ?></a></li>
            <?php } ?>
            </ol>
        </div>
    </body>
</html>