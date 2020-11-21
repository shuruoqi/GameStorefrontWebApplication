<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];
if (isset($_POST["deviceName"])) {
    $conn = OpenCon();
    if (isset($_POST['deviceName']) and isset($_POST['insert'])) {
        $dName = $_POST['deviceName'];
        $dId = 0;
        for ($i = 1; $i <= 2; $i++) {
            $n = floor(rand(1, 500) * 20 + 10);
            $dId = $dId + $n;
        }

        $sql = "INSERT INTO HasPlayer_Device (playerID, deviceID, deviceName) VALUES ('$id','$dId','$dName')";
    } 
    if ($conn->multi_query($sql) === TRUE) {
        header('location:Player-Device.php');
    } else {
        echo "Error : " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/Sidebar.css"/>
    <link rel="stylesheet" href="CSS/iconfont-Sidebar.css"/>
    <title>Device</title>
</head>

<body>
<div id="Centered">

    <div class="Header">
        <img src="ProjectIMG/Header.jpg"/>
    </div>

    <div class="MainBox">

        <div class="SideBar">
            <ul>
                <li>
                    <a href="Player-Info.php">
                        <span class="iconfont icon-user"></span>
                        <span>Account Info</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Membership.php">
                        <span class="iconfont icon-membership"></span>
                        <span>Membership</span>
                    </a>
                </li>
                <li>
                    <a href="Player-MyGames.php">
                        <span class="iconfont icon-game"></span>
                        <span>My Games</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Bank.php">
                        <span class="iconfont icon-bank"></span>
                        <span>Bank Account</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Device.php">
                        <span class="iconfont icon-device"></span>
                        <span>Device</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Gift.php">
                        <span class="iconfont icon-gift"></span>
                        <span>Gift</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Friends.php">
                        <span class="iconfont icon-friends"></span>
                        <span>Friends</span>
                    </a>
                </li>
                <li>
                    <a href="Player-AllGames.php">
                        <span class="iconfont icon-all"></span>
                        <span>All Games</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="Content">
            <h2>Device</h2>
            <?php
                $conn = OpenCon();
                $query = "SELECT H.playerID, H.deviceID, H.deviceName FROM HasPlayer_Device H WHERE H.playerID = '$id'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<table border=1>";
                    echo "<tr><th>Device Name</th><th>Account ID</th><th>Device ID</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr> <td>" . $row["deviceName"] . "</td> <td>" . $row["playerID"] . "</td> <td>" . $row["deviceID"] . "</td> </tr>"; //or just use "echo $row[0]"
                    }
                    echo "</table>";
                } else {
                    echo "No account";
                }
            ?>
             <form method="POST" action="Player-Device.php">
                <h2>Add New Device</h2>
                Device Name: <input type="text" name="deviceName"> <br/><br/>
                <input class="Button" type="submit" value="Add" name="insert"/> <br/><br/>
             </form>
        </div>
    </div>
</div>
</body>
</html>