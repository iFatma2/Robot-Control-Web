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
} else {
    $direction = "";
}

if (isset($_POST["right"])) {
    $sql = "INSERT INTO direction (direct) VALUES ('r')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('R successfully added!'); window.location = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else if (isset($_POST["left"])) {
    $sql = "INSERT INTO direction (direct) VALUES ('l')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('L successfully added!'); window.location = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else if (isset($_POST["forward"])) {
    $sql = "INSERT INTO direction (direct) VALUES ('f')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('F successfully added!'); window.location = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else if (isset($_POST["backward"])) {
    $sql = "INSERT INTO direction (direct) VALUES ('b')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('B successfully added!'); window.location = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else if (isset($_POST["stop"])) {
    $sql = "INSERT INTO direction (direct) VALUES ('s')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('S successfully added!'); window.location = 'index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



// Close the database connection
mysqli_close($conn);
?>
