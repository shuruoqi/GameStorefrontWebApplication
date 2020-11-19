<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];

if (isset($_POST["uAccountID"])) {
    $conn = OpenCon();
    if (isset($_POST['upgrade'])) {
        $sql = "SELECT playerID FROM GoldMember WHERE playerID = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Already a gold member!";
        } else {
            $uAccountID = $_POST['uAccountID'];
            $sql = "INSERT INTO GoldMember (playerID) VALUES ('$id');";
            $sql .= "DELETE FROM RegularMember WHERE playerID = '$id'";
        }
    } 
    if ($conn->multi_query($sql) === TRUE) {
        header('location:Player-Membership.php');
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
    <title>User Information</title>
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
            <h2>Membership</h2>
            <form method="POST" action="Player-Membership.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">

                <div class="Read">
                    Current Membership:
                    <?php
                    $conn = OpenCon();
                    $query = "SELECT playerID FROM RegularMember WHERE playerID = '$id'";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        // echo "<class="."Membership"." type="."text". "value="."Regular Member" ."readonly/>";
                        echo "Regular Member";
                    } else {
                        // echo "<class="."Membership"." type="."text". "value="."Gold Member" ."readonly/>";
                        echo "Gold Member";
                    }
                    ?>
                </div>
                <br/><br/>
                Upgrade to Golden Member: $100 (A lifetime guarantee!) <br/><br/>
                <?php
                $conn = OpenCon();
                $query = "SELECT accountID FROM HasBankAccount_Player H WHERE H.playerID = '$id'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<select name=uAccountID>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['accountID'] . "'>" . $row['accountID'] . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo "No account";
                }
                ?><br/><br/>
                <input class="Button" type="submit" value="Upgrade" name="upgrade"/>
                </a>
            </form>
        </div>
    </div>
</div>
</body>
</html>