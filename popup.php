<?php
include 'connect.php';
// var_dump($_POST);
session_start();
$var_value = $_SESSION['varname'];

// header("Location:Player-Bank.php");
// $id = $_GET['varname'];

// $id = 0;
// for ($i = 1; $i <= 2; $i++) {
//     $n = floor(rand(1, 500) * 20 + 10);
//     $id = $id + $n;
// }
// echo "Your id is: ". $id. "  ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Center.css"/>
    <link rel="stylesheet" href="../CSS/PopUp.css"/>
    <title>Successful</title>
</head>
<body>

<div id="Centered">

    <div class="MainBox">

        <h3>Successful!</h3>
        <form method="POST" action="SignIn.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            <!-- <input class="loginButton" type="button" value="<?php echo $id?>"> -->
            Your ID is <h2 value="<?php echo $var_value?>"><?php echo $var_value?></h2>
            <p> Please be reminded that this ID number will be asked every time you log-in </p>
            <a href="SignIn.php">
                <input class="loginButton" type="button" value="Redirect to Sign-in page"/>
            </a>

        </form>
    </div>
</div>
</body>

<!-- <script>
    var rndnumb = "";
    for (i = 1; i <= 2; i++) {
        n = Math.floor(Math.random() * 89999 + 10000);
        rndnumb = rndnumb + n;
    }
    document.getElementById("randomnumber").innerHTML = rndnumb;
</script> -->
</html>
