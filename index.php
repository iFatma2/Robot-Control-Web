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
                <td><button type="submit" value="Forward" id="Forward" name="forward" class="grad">Forward</button></td>
            </tr>
            <tr>
                <td><button type="submit" value="Left" id="left" name="left" class="grad">Left</button></td>
                <td><button type="submit" value="Stop" id="stop" name="stop" class="grad">Stop</button></td>
                <td><button type="submit" value="Right" id="right" name="right" class="grad">Right</button></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" value="Backward" id="backward" name="backward" class="grad">Backward</button></td>
                <td></td>
            </tr>
        </table>
    </form>
    <img id="arm" src="arm.png" width="200" height="300">
</body>
</html>
