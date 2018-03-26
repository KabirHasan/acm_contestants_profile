
<html>
    <head>
	   <link href="css_.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
        <div id="s5"><a class="c" href="index.php">Home</a><a class="c1" href="contestants.php">Contestants</a> <a class="c1" href="teams.php">Teams</a><a class="c1" href="coaches.php">Coaches</a><a class="c1" href="contests.php">Contests</a><a class="c1" href="budgets.php">Budges</a></div>
        <?php
        include('db.php');
        $sql = "SELECT * FROM `contests`";
        $result = mysqli_query($connect,$sql); ?>
        <ol>
            
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <li><a target="_blank" href="<?php echo $row['link'] ?>"><?php echo $row['title']. "&nbsp&nbsp&nbspheld on &nbsp&nbsp".$row['datee'] ?></a></li>
                
         <?php } ?>
            </ol>
        </div>
    </body>
</html>