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
    $username = $_GET["username"];
    echo "<p>Welcome $username from process.php</p>";
   
    // copied from process.php
    if ( !( $database = mysqli_connect( "dbsrv2.cs.fsu.edu","bollock","1hSObrpVvNhq")))
    die( "Could not connect to database");
   
   


    if ( !mysqli_select_db( $database, "bollockdb") )
    die( "Could not open database");

    

    // select * from Teams where username='test1';
    $query = "SELECT * from Teams where username='".$username."';";
    if ( !( $result = mysqli_query( $database, $query)))
        { 
            echo ( "<p>Could not execute query!</p>" );  
            die( mysqli_error() );
        }

    $team = mysqli_fetch_row($result);
        echo "<p> Your team is: ".$team[0]."</p>";
    ?>

   <!-- team table --> <!--switch to team name -->
        <!--<caption> Your AAF team </caption>-->
        <?php 
        
        echo "<p> Echoing table </p>";
        $queryPlayers = "SELECT * from Players where team_name='".$team[0]."';";
        echo "<p> query is: ".$queryPlayers;
        echo "<table border='1'>";
      
        
        if ( !( $result = mysqli_query( $database, $queryPlayers)))
        { 
            echo ( "<p>Could not execute query!</p>" );  
            die( mysqli_error() );
        }
        // debug
        echo "<p> Executed query </p>";

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
        echo "<p> Fetched rows </p>";
        
        ?>
    <?php
echo "<h2><a href=http://ww2.cs.fsu.edu/~bollock/addplayers.php?teamname=$team[0]&username=$username> Add Players to your Team</h2>";
?>
</body>
</html>