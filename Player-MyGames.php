<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];

$conn = OpenCon();
if (isset($_POST['gID'])) {
    if (isset($_POST['buy'])) {
        $gameID = $_POST['gID'];
        $today = date("Y-m-d");
        $sql = "INSERT INTO HasPlayer_Game_Accomplishment (playerID, gameID, accomplishmentID, rating, timeSpent, obtainedDate) VALUES ('$id', '$gameID', 1, 0, 0, '$today')";
    }
    if ($conn->multi_query($sql) === TRUE) {
        header('location:Player-MyGames.php');
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
    <title>My Games</title>
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
            <form method="POST" action="Player-MyGames.php">
                <h2>My Games</h2>
                <?php
                $conn = OpenCon();
                $query = "SELECT DISTINCT g.gameName, g.gameType, g.latestVersion FROM Game g, HasPlayer_Game_Accomplishment H WHERE H.playerID = '$id' AND g.gameID = H.gameID";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<table border=1>";
                    echo "<tr><th>Game Name</th><th>Game Type</th><th>Version</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr> <td>" . "<a href=" . "GameInfo-" . str_replace(' ', '', $row["gameName"]) . ".php>" . $row["gameName"] . "</a>" . "</td> <td>" . $row["gameType"] . "</td> <td>" . $row["latestVersion"] . "</td> </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No games";
                }
                ?>
                <h2>Buy Games</h2>
                <?php
                $conn = OpenCon();
                $query = "SELECT DISTINCT g.gameName, g.gameID FROM Game g, HasPlayer_Game_Accomplishment H WHERE H.playerID = '$id' AND g.gameID <> H.gameID";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<select name=gID>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['gameID'] . "'>" . $row['gameName'] . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo "All games are purchased";
                }
                ?><br/><br/>
                <input class="Button" type="submit" value="Buy" name="buy"/> <br/><br/>
            </form>
        </div>
    </div>
</div>
</body>
</html>