<?php
//include 'connect.php';
//
//if (isset($_POST["bankName"]) and isset($_POST["accountID"]) and isset($_POST["expiryDate"])) {
//
//    $bankName = $_POST['bankName'];
//    $accountID = $_POST['accountID'];
//    $expiryDate = $_POST['expiryDate'];
//
//    $conn = OpenCon();
//    $sql = "INSERT INTO BankAccount (accountID, bankName, expiryDate) VALUES ('$accountID','$bankName','$expiryDate')";
//
//    if ($conn->query($sql) === TRUE) {
//        echo "New bank account added";
//    } else {
//        echo "Error : " . $conn->error;
//    }
//
//} else {
//    echo "POST array is null";
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/Sidebar.css"/>
    <link rel="stylesheet" href="CSS/iconfont-Sidebar.css"/>
    <title>AddNewPaymentMethod</title>
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
                    <a href="HTML/Player/Player-Info.html">
                        <span class="iconfont icon-user"></span>
                        <span>Account Info</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-Membership.html">
                        <span class="iconfont icon-membership"></span>
                        <span>Membership</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-MyGames.html">
                        <span class="iconfont icon-game"></span>
                        <span>My Games</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-Bank.html">
                        <span class="iconfont icon-bank"></span>
                        <span>Bank Account</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-Device.html">
                        <span class="iconfont icon-device"></span>
                        <span>Device</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-Gift.html">
                        <span class="iconfont icon-gift"></span>
                        <span>Gift</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-Friends.html">
                        <span class="iconfont icon-friends"></span>
                        <span>Friends</span>
                    </a>
                </li>
                <li>
                    <a href="HTML/Player/Player-AllGames.html">
                        <span class="iconfont icon-all"></span>
                        <span>All Games</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="Content">
            <h2>Bank Account > Add New Payment Method</h2>
            <form method="POST" action="Player-AddBankAccount.php">
                <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
                Bank Name: <input type="text" name="bankName"> <br/><br/>
                Account ID: <input type="text" name="accountID" placeholder="xxxx-xxxx-xxxx-xxxx"> <br/><br/>
                Expire Date: <input type="text" name="expiryDate" placeholder="YYYY-MM-DD"> <br/><br/>

                <!--            <a href="HTML/Player/Player-Bank.html">-->
                <!--                <a href="Player-AddBankAccount.php">-->
                <input class="Button" type="submit" value="Add Account"/> <br/><br/>
                <!--                </a>-->
            </form>

        </div>
    </div>

</body>
</html>