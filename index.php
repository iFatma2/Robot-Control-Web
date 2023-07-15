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

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>robot control panel</title>
    <link rel="stylesheet" type="text/css" href="control panel.css">
    <style>
        .selected {
            background-color: #f3d9ff;
        }
    </style>
    <script type="text/javascript" src="control panel.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>



<body style="background-image: linear-gradient(to left, #0A164D, #0A164D);">
    <form id="main" action="control_panel.php" method="POST">
        <h1>Robot Movement Control Panel</h1>
        <table>
            <tr>
                <td></td>
                <td><button type="submit" value="Forward" id="Forward" name="forward" class="grad<?php if ($direction === 'f') echo ' selected'; ?>"<?php if ($direction === 'f') echo ' disabled'; ?>>Forward</button></td>
            </tr>
            <tr>
                <td><button type="submit" value="Left" id="left" name="left" class="grad<?php if ($direction === 'l') echo ' selected'; ?>"<?php if ($direction === 'l') echo ' disabled'; ?>>Left</button></td>
                <td><button type="submit" value="Stop" id="stop" name="stop" class="grad<?php if ($direction === 's') echo ' selected'; ?>"<?php if ($direction === 's') echo ' disabled'; ?>>Stop</button></td>
                <td><button type="submit" value="Right" id="right" name="right" class="grad<?php if ($direction === 'r') echo ' selected'; ?>"<?php if ($direction === 'r') echo ' disabled'; ?>>Right</button></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" value="Backward" id="backward" name="backward" class="grad<?php if ($direction === 'b') echo ' selected'; ?>"<?php if ($direction === 'b') echo ' disabled'; ?>>Backward</button></td>
                <td></td>
            </tr>
        </table>
    </form>
    <img id="arm" src="arm.png" width="200" height="300">
</body>
</html>
