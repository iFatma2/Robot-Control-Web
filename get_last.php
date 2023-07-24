<?php
// Connection to server & database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aa";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

// Retrieve the direction from the database
$sql = "SELECT direct FROM direction ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $direction = $row['direct'];
    echo $direction;
} else {
    $direction = "";
    echo $direction;
}

// Close the database connection
mysqli_close($conn);
?>
