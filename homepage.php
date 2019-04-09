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
    ?>
</body>
</html>