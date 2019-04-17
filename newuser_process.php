<html>
<body>
    <h1>newuser_process.php</h1>
<?php
$username = $_GET["username"];
$password = $_GET["password"];
$teamname = $_GET["teamname"];
$email = $_GET["email"];

// connecting to DB
// user login, verify login credentials
// credit: Dr. Brodhead, L17_PHP-Pt2

if (!($database = mysqli_connect("dbsrv2.cs.fsu.edu", "bollock", "1hSObrpVvNhq"))) die("Could not connect to database");
echo "<p>Connected to database</p>";

if (!mysqli_select_db($database, "bollockdb")) die("Could not open database");
echo "<p>Opening database....</p>";

// select * from People where username='test1' && passwd='testpw';

$query = "INSERT INTO People VALUES ('$username',MD5('$password'),'$email');";

if (!($result = mysqli_query($database, $query)))
	{
	echo ("<p>line 35!</p>");
	echo ("<p>bad query is: $query</p>");
	echo ("<p>Could not execute query!</p>");

	// maybe forward user w/ error message if login is bad w/ GET

	die(mysqli_error());
	}

$query = "INSERT INTO Teams VALUES ('$teamname','$username');";

if (!($result = mysqli_query($database, $query)))
	{
	echo ("<p>line 44!</p>");
	echo ("<p>Could not execute query!</p>");

	// maybe forward user w/ error message if login is bad w/ GET

	die(mysqli_error());
	}

// password hashing
// UPDATE table SET Password = MD5(Password) WHERE ID!=[specified index]
// CREDIT: https://stackoverflow.com/questions/704194/how-to-hash-passwords-in-mysql
// $query = "UPDATE People SET PASSWD = MD5($password) WHERE id=$username;";

/*echo ("<p>QUERY IS: $query</p>");
if ( !( $result = mysqli_query( $database, $query)))
{
echo ( "<p>QUERY IS: $query</p>" );
echo ( "<p>TEST? LINE 58</p>" );
echo ( "<p>Could not execute query!</p>" );

// maybe forward user w/ error message if login is bad w/ GET

die( mysqli_error() );
}*/

// redirect to log in page

mysqli_close($database);
echo "<script> alert('Successful registration. $username, team name: $teamname. Please log in with your new credentials.'); </script>";
echo "<script> location.href='http://ww2.cs.fsu.edu/~bollock/index.html'; </script>";
?>
</body>
</html>
