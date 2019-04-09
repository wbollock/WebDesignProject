<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AAF Fantasy Football Homepage</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script type="text/javascript" rel="script" src="js/scripts.js" defer></script>
</head>
<body>
    <h1>Your Team Home Page</h1>
    
    <?php
    $teamname = $_GET["teamname"];
    echo "<h3>Team $teamname</h3>";
   
    // copied from process.php
    if ( !( $database = mysqli_connect( "dbsrv2.cs.fsu.edu","bollock","1hSObrpVvNhq")))
    die( "Could not connect to database");

    if ( !mysqli_select_db( $database, "bollockdb") )
    die( "Could not open database");

    ?>

        <!-- team table --> <!--switch to team name -->
        <!--<caption> Your AAF team </caption>-->
        <?php 
        $queryPlayers = "SELECT * from Players where team_name='$teamname'";
        echo "<table border='1'>";
      
        
        if ( !( $result = mysqli_query( $database, $queryPlayers)))
        { 
            echo ( "<p>Could not execute query!</p>" );  
            die( mysqli_error() );
        }
        

        while ($row = mysqli_fetch_array( $result ))
        {
            echo ( "<tr>" );
            echo ( "<td>" . $row[4]. "</td>");
            echo ( "<td>" . $row[2]. "</td>");
            echo ( "<td>" . $row[3]. "</td>");
            echo ( "</tr>" );
        }
        // debug
        echo "</table>";

        

    // avaiable players table
    // do an intersection? of all players NOT on user's team
    // all players with None team name are not added.
    // put a button by them, that says "Add to Team" then refresh page?
    // add to team button will just change the team_name to user's team from NONE w/ update
    echo "<h2>Avaiable players</h2>";
    echo "<table border='2'>";
    
        $queryAllPlayers = "SELECT * From Players where team_name='None';";
    if ( !( $result = mysqli_query( $database, $queryAllPlayers)))
        { 
            echo ( "<p>Could not execute query!</p>" );  
            die( mysqli_error() );
        }
    while ($row = mysqli_fetch_array( $result ))
        {
            echo ( "<tr>" );
            echo ( "<td>" . $row[4]. "</td>");
            echo ( "<td>" . $row[2]. "</td>");
            echo ( "<td>" . $row[3]. "</td>");
            echo ( "<td>"."<a href=http://ww2.cs.fsu.edu/~bollock/addplayers.php?teamname=$teamname&click=1 class=\"btn\">Click me</a>"."</td>");
            // button needs to UPDATE player to team
            echo ( "</tr>" );
        }
        // debug
        echo "</table>";
        echo "<p> Fetched rows </p>";

        if($_GET['click']) {
            echo "<script> alert('You added $row[4] to $teamname'); </script>";
        }

        ?>
 
</body>
</html>