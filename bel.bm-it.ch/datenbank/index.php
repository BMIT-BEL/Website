<html>

<head>

</head>

<body>
<?php
$servername = "localhost";
$username = "bel_db_adm";
$password = "3\$pa\$.db.bel";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

</body>

</html>