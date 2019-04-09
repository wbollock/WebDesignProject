<html>
<body>
    <h1>Process.php HTML</h1>
<?php

$username = $_GET["username"];
$password = $_GET["password"];
echo "Welcome ".$username." (with variable) <br>";



// connecting to DB

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



$query = "SELECT * from People where username='".$username."' && passwd='".$password."';";
echo "<p>Query is: $query</p>";
if ( !( $result = mysqli_query( $database, $query)))
{
    
    echo ( "<p>Could not execute query!</p>" );
    // maybe forward user w/ error message if login is bad w/ GET
    die( mysqli_error() );
    
}
// if returning empty set, redirect back to homepage
if (mysqli_num_rows($result) == 0)
{
    echo "<script> alert('User not found'); </script>";
    echo "<script> location.href='http://ww2.cs.fsu.edu/~bollock/index.html'; </script>";
}




echo "<p>You're successfully logged in!</p></body>";

mysqli_close( $database );
// if login is succesful
echo "<script> location.href='http://ww2.cs.fsu.edu/~bollock/homepage.php?username=$username'; </script>";
        exit;
        
?>
</body>
</html>