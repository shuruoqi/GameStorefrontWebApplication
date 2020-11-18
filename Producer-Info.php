<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/Sidebar.css"/>
    <link rel="stylesheet" href="../../CSS/iconfont-Sidebar.css"/>
    <title>ProducerInformation</title>
</head>

<body>
<div id="Centered">

    <div class="Header">
        <img src="../../ProjectIMG/ProducerHeader.jpg"/>
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
            <h2>Account Info</h2>
            <img src="../../ProjectIMG/ProfilePic.jpg"/>

            <form method="POST" action="../../../../Downloads/display.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">

                <div class="Read">
                  <?php
                  $conn = OpenCon();
                  $query = "SELECT P.companyName, P.companyID, P.totalProduced FROM Producer P WHERE P.companyID = '$id'";
                  $result = $conn->query($query);
                  $row = $result->fetch_assoc();

                  echo "Company Name: " . $row["companyName"] . "<br/><br/>";
                  echo "ID:" . $row["companyID"] . "<br/><br/>";
                  echo "Total number of Games: " . $row["totalProduced"] . "<br/><br/>";

                  $conn->close();
                  ?>

                </div>
                <br/><br/>
            </form>
        </div>
    </div>
</div>
</body>
</html>
