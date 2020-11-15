<?php
include 'connect.php';
session_start();
$id = $_SESSION['varname'];
//function printResult($result)
//{ //prints results from a select statement
//    echo "<table>";
//    echo "<tr><th>AccountID</th><th>BankName</th><th>ExpiryDate</th></tr>";
//
//    while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
//        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
//    }
//
//    echo "</table>";
//}

if ((isset($_POST["iAccountID"]) and isset($_POST["iExpiryDate"])) || (isset($_POST["uAccountID"]) and isset($_POST["uExpiryDate"]))) {
    $conn = OpenCon();
    if (isset($_POST['bankName']) and isset($_POST['insert'])) {
        $bankName = $_POST['bankName'];
        $iAccountID = $_POST['iAccountID'];
        $iExpiryDate = $_POST['iExpiryDate'];
        $sql = "INSERT INTO BankAccount (accountID, bankName, expiryDate) VALUES ('$iAccountID','$bankName','$iExpiryDate')";
        $sql .= "INSERT INTO HasBankAccount_Player (accountID, playerID) VALUES ('$iAccountID','$id')";
    } else if (isset($_POST['update'])) {
        $uAccountID = $_POST['uAccountID'];
        $uExpiryDate = $_POST['uExpiryDate'];
        $sql = "UPDATE BankAccount SET expiryDate='$uExpiryDate' WHERE accountID='$uAccountID'";
    }
    if ($conn->multi_query($sql) === TRUE) {
        echo "niceeeeeeee";
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
    <link rel="stylesheet" href="CSS/Sidebar.css"/>
    <link rel="stylesheet" href="CSS/iconfont-Sidebar.css"/>
    <title>Bank</title>
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
            <h3>Bank Account</h3>
<!--            <input class="Button" type="submit" value="Get info" name="get"/> <br/><br/>-->
            <form method="GET" action="Player-Bank.php"> <!--refresh page when submitted-->
                <div class="BankAccount">
                    <table border="1">
                        <thead>
                        <tr>
                            <th>Bank Name</th> <th>ID</th> <th>Expire Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>RBC</td>
                            <td>****0101</td>
                            <td>2021-01-01</td>
                        </tr>
                        <tr>
                            <td>BMO</td>
                            <td>****0202</td>
                            <td>2021-01-01</td>
                        </tr>
                        <tr>
                            <td>TD</td>
                            <td>****0303</td>
                            <td>2021-01-01</td>
                        </tr>
                        <tr>
                            <td>CIBC</td>
                            <td>****0404</td>
                            <td>2021-01-01</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>

            <form method="POST" action="Player-Bank.php"> <!--refresh page when submitted-->
                <h3>Add New Payment Method</h3>
                Bank Name: <input type="text" name="bankName"> <br/><br/>
                Account ID: <input type="text" name="iAccountID" placeholder="xxxx-xxxx-xxxx-xxxx"> <br/><br/>
                Expiry Date: <input type="text" name="iExpiryDate" placeholder="YYYY-MM-DD">
                <input class="Button" type="submit" value="Add" name="insert"/> <br/><br/>

                <h3>Update Expire Date</h3>
                Account ID: <input type="text" name="uAccountID" placeholder="xxxx-xxxx-xxxx-xxxx"> <br/><br/>
                Expiry Date: <input type="text" name="uExpiryDate" placeholder="YYYY-MM-DD">
                <input class="Button" type="submit" value="Update" name="update"/> <br/><br/>

                <h3>Delete Account</h3>
                <input class="Button" type="button" value="Delete"/> <br/><br/>
            </form>
        </div>
    </div>
</div>
</body>
</html>