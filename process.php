<html>
<body>
    <h1>Process.php HTML</h1>
<?php
echo "Welcome ".$_GET["username"]."<br>";
echo "Your password is: ".$_GET["password"];



// connecting to DB
echo "<h1>process.php PHP</h1>";
// user login, verify login credentials


/* Crashes program
if (isset($_GET["username"]) && isset($_GET["password"]) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    echo "Welcome from isset".$_GET["username"];
}*/



if ( !( $database = mysqli_connect( "dbsrv2.cs.fsu.edu","bollock","1hSObrpVvNhq")))
    die( "Could not connect to database");
   
    echo "<p>Connected to database</p>";


if ( !mysqli_select_db( $database, "bollockdb") )
    die( "Could not open database");

    echo "<p>Opening database....</p>";

// select * from People where username='test1' && passwd='testpw';

$query = "SELECT * from People where username=\'".$username."\' && passwd=\'".$password."\'";

if ( !( $result = mysqli_query( $database, $query)))
{
    echo ( "<p>RESULT IS: $result</p>");
    echo ( "<p>Could not execute query!</p>" );
    die( mysqli_error());
}

echo "<p>You're successfully logged in!</p></body>";
mysqli_close( $database );

?>
</body>
</html>