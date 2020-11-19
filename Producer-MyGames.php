<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];

if (isset($_POST["gName"]) and isset($_POST["newVer"])) {
    $conn = OpenCon();
    if (isset($_POST['update'])) {
        $gid = $_POST["gName"];
        $nv = $_POST["newVer"];
        $sql = "UPDATE Game SET latestVersion='$nv' WHERE gameID= '$gid';";
    } 
    if ($conn->multi_query($sql) === TRUE) {
        header('location:Producer-MyGames.php');
        echo "Updated";
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
    <title>MyGames</title>
</head>

<body>
<div id="Centered">

    <div class="Header">
        <img src="ProjectIMG/ProducerHeader.jpg"/>
    </div>

    <div class="MainBox">

        <div class="SideBar">
            <ul>
                <li>
                    <a href="Producer-Info.php">
                        <span class="iconfont icon-user"></span>
                        <span>Account Info</span>
                    </a>
                </li>
                <li>
                    <a href="Producer-MyGames.php">
                        <span class="iconfont icon-membership"></span>
                        <span>My Games</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="Content">
            <form method="POST" action="Producer-MyGames.php">
                <h2>My Games</h2>
                <!-- <select name="location">
                    <optgroup label="location">
                        <option value=Don't starve>Don't starve</option>
                        <option value=Stardew Valley>Stardew Valley</option>
                        <option value=Oxygen Not Included>Oxygen Not Included</option>
                    </optgroup>
                </select> <br/><br/> -->
                <?php
                $conn = OpenCon();
                $query = "SELECT g.gameName FROM Game g, PublishUpdateGame p WHERE p.companyID = '$id' AND p.gameID = g.gameID";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<select name=gName>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['gameID'] . "'>" . $row['gameName'] . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo "No account";
                }
                ?>

                <div class="Write">
                    Update Version:
                    <input type="text" name="newVer">
                    <input class="Button" type="submit" value="Update" name="update"/> <br/><br/>
                </a>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>