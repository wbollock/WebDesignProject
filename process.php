<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <h1>Process.php HTML</h1>
<?php
// connecting to DB
echo "<h1>process.php PHP</h1>";
// user login, verify login credentials

if (isset($_GET['username']) && isset($_GET['password']) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $response = 'Successful login?';
    header('Content-type: applicaiton/json');
    echo json_encode($response);
}
// select * from People where username='test1' && passwd='testpw';

if ( !( $database= mysqli_connect( "dbsrv2.csu.fsu.edu", "bollock", "1hSObrpVvNhq")))
    die( "Could not connect to database");


if ( !mysqli_select_db( $database, "bollockdb") )
    die( "Could not open database;")

$query = "SELECT * from People where username='" . $username "' && passwd='" . $password "'";

if ( !( $result = mysqli_query( $database, $query)))
{
    echo ( "<p>Could not execute query!</p>" );
    die( mysqli_error(). "</body></html>");
}

echo "<p>You're successfully logged in!</p></body>";
mysqli_close( $database );

?>
</body>
</html>