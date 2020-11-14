<?php
include 'connect.php';


if (isset($_POST["uAccountID"]) and isset($_POST["uExpiryDate"]) and isset($_POST['update'])) {

    $uAccountID = $_POST['uAccountID'];
    $uExpiryDate = $_POST['uExpiryDate'];

    $conn = OpenCon();
    $sql = "UPDATE BankAccount SET expiryDate='$uExpiryDate' WHERE accountID='$uAccountID'";

    if ($conn->query($sql) === TRUE) {
        echo "Expire date updated";
    } else {
        echo "Error : " . $conn->error;
    }

} else {
    echo "POST array is null";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/Sidebar.css"/>
    <link rel="stylesheet" href="../../CSS/iconfont-Sidebar.css"/>
    <title>UpdateExpireDate</title>
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
                    <a href="Player-Info.html">
                        <span class="iconfont icon-user"></span>
                        <span>Account Info</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Membership.html">
                        <span class="iconfont icon-membership"></span>
                        <span>Membership</span>
                    </a>
                </li>
                <li>
                    <a href="Player-MyGames.html">
                        <span class="iconfont icon-game"></span>
                        <span>My Games</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Bank.html">
                        <span class="iconfont icon-bank"></span>
                        <span>Bank Account</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Device.html">
                        <span class="iconfont icon-device"></span>
                        <span>Device</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Gift.html">
                        <span class="iconfont icon-gift"></span>
                        <span>Gift</span>
                    </a>
                </li>
                <li>
                    <a href="Player-Friends.html">
                        <span class="iconfont icon-friends"></span>
                        <span>Friends</span>
                    </a>
                </li>
                <li>
                    <a href="Player-AllGames.html">
                        <span class="iconfont icon-all"></span>
                        <span>All Games</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="Content">
            <h2>Bank Account > Update Expire Date</h2>
            <form method="POST" action="Player-AddBankAccount.php">
                <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
                <form method="GET" action="display.php">
                    <select name="bank account">
                        <optgroup label="Country/Region">
                            <!--                            !!!!!!!!!!!!!!!!!!!!!-->
                            <option value=Canada>RBC ****0101</option>
                            <option value=China>BMO ****0202</option>
                            <option value=US>TD ****0303</option>
                            <option value=Mexico>CIBC ****0404</option>
                        </optgroup>
                    </select> <br/><br/>
                </form>

                <form method="POST" action="display.php"> <!--refresh page when submitted-->
                    <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
                    Expire Date: <input type="text" name="expiredate" placeholder="YYYY-MM-DD"> <br/><br/>

                    <!--                <a href="Player-Bank.html">-->
                    <input class="Button" type="submit" value="Update"/> <br/><br/>
                    <!--                </a>-->
                </form>
            </form>
        </div>
    </div>
</div>

</body>
