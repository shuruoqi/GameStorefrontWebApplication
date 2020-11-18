<?php
include 'connect.php';
session_start();
$id = $_SESSION['currentID'];

if (isset($_POST["friendID"])and isset($_POST['add'])) {
    $conn = OpenCon();
    $friendID = $_POST['friendID'];

    $query = "SELECT * FROM Player WHERE playerID = '$friendID'";
    $result = mysqli_query($conn,$query) or die("Failed to query database ".mysql_error());
    $row = mysqli_fetch_array($result);

    if (!empty($row)){
    $sql = "INSERT INTO IsFriendOf (playerID1, playerID2) VALUES ('$id','$friendID');";
    $sql .= "INSERT INTO IsFriendOf (playerID1, playerID2) VALUES ('$friendID','$id')";
    if ($conn->multi_query($sql) === TRUE) {
        header('location:Player-Friends.php');
    } else {
        echo "Error : " . $conn->error;
    }
  }else{
    echo "No user exists!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/Sidebar.css"/>
    <link rel="stylesheet" href="../../CSS/iconfont-Sidebar.css"/>
    <title>Friends</title>
</head>

<body>

<div id="Centered">

    <div class="Header">
        <img src="../../ProjectIMG/Header.jpg"/>
    </div>

    <div class="MainBox">

      <div class="SideBar">
          <ul>
              <li>
                  <a href="Player-Info.php">
                      <span class="iconfont icon-user"></span>
                      <span>Account Info</span>
                  </a >
              </li>
              <li>
                  <a href="Player-Membership.php">
                      <span class="iconfont icon-membership"></span>
                      <span>Membership</span>
                  </a >
              </li>
              <li>
                  <a href="Player-MyGames.php">
                      <span class="iconfont icon-game"></span>
                      <span>My Games</span>
                  </a >
              </li>
              <li>
                  <a href="Player-Bank.php">
                      <span class="iconfont icon-bank"></span>
                      <span>Bank Account</span>
                  </a >
              </li>
              <li>
                  <a href="Player-Device.php">
                      <span class="iconfont icon-device"></span>
                      <span>Device</span>
                  </a >
              </li>
              <li>
                  <a href="Player-Gift.php">
                      <span class="iconfont icon-gift"></span>
                      <span>Gift</span>
                  </a >
              </li>
              <li>
                  <a href="Player-Friends.php">
                      <span class="iconfont icon-friends"></span>
                      <span>Friends</span>
                  </a >
              </li>
              <li>
                  <a href="Player-AllGames.php">
                      <span class="iconfont icon-all"></span>
                      <span>All Games</span>
                  </a >
              </li>
          </ul>
      </div>

        <div class="Content">
            <h3>Friends</h3>
            <?php
            $conn = OpenCon();
            $query = "SELECT P.username FROM Player AS P,IsFriendOf WHERE IsFriendOf.playerID1 = '$id' AND P.playerID = IsFriendOf.playerID2 ";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                echo "<table border=1>";
                echo "<tr><th>Friend Name</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" . $row["username"] . "</td> </tr>"; //or just use "echo $row[0]"
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>

            <form method="POST" action="Player-Friends.php"> <!--refresh page when submitted-->
              <div class="Add Friend">
                  Find by searching ID:
                  <span class="iconfont icon-nickname"></span>
                  <input type="text" placeholder="His/her userID" name="friendID">

                  <input class="Button" name="add" type="submit" value="Add">


              </div>
            </form>
        </div>
   </div>
</div>
</body>
</html>
