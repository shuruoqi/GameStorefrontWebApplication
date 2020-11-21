<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/Sidebar.css"/>
<!--    <link rel="stylesheet" href="../CSS/Player/Player-Bank.css"/>-->
    <link rel="stylesheet" href="CSS/iconfont-Sidebar.css"/>
    <title>Gift</title>
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
            <h2>Gift</h2>
            Gifts you received:
            <?php
                $conn = OpenCon();
                $query = "SELECT G.giftName, G2.giftValue, R.receivedDate FROM ReceivesGoldMember_Gift R, Gift G, Gift2 G2 WHERE R.playerID = '$id' AND R.giftID = G.giftID AND G.giftName = G2.giftName";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<table border=1>";
                    echo "<tr><th>Name</th><th>Value</th><th>Date</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr> <td>" . $row["giftName"] . "</td> <td>" . $row["giftValue"] . "</td> <td>" . $row["receivedDate"] . "</td> </tr>"; //or just use "echo $row[0]"
                    }
                    echo "</table>";
                } else {
                    echo "No account";
                }
                ?>
        </div>
    </div>
</div>
</body>
</html>