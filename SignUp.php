<?php
include 'connect.php';
// var_dump($_POST);

// if (isset($_POST['To Bank'])) {
//         header("Location:Player-Bank.php");
//     }

$id = 0;
for ($i = 1; $i <= 2; $i++) {
    $n = floor(rand(1, 500) * 20 + 10);
    $id = $id + $n;
}
// echo "Your id is: ". $id. "  ";

if (!empty($_POST["username"]) and !empty($_POST["password"]) and !empty($_POST["location"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    $type = $_POST['type'];

    $conn = OpenCon();
    if ($type === 'producer') {
        $sql = "INSERT INTO producer (companyID, companyName, companyPW, location,totalProduced) VALUES ('$id', '$username','$password','$location','0')";
    } else {
        $sql = "INSERT INTO player (playerID, username, playerPW, location) VALUES ('$id', '$username', '$password', '$location');";
        $sql .= "INSERT INTO RegularMember (playerID) VALUES ('$id');";
    }
    if ($conn->multi_query($sql) === TRUE) {
        echo "New user added---Your id is: " . $id;
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
    <link rel="stylesheet" href="CSS/Center.css"/>
    <link rel="stylesheet" href="CSS/SignUp.css"/>
    <title>SignUp</title>
</head>

<body>

<div id="Centered">

    <div class="MainBox">

        <h1>New User Sign up</h1>
        <form method="POST"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            <!-- Your ID will be <h2 id="randomnumber"></h2> -->
            <div class="inputBox">
                <div class="inputText">
                    User Name: <input type="text" name="username"> <br/><br/>
                    Password: <input type="password" name="password"> <br/><br/>
                    Confirm Password: <input type="password" name="password"> <br/><br/>
                </div>
                Location:
                <select name="location">
                    <optgroup label="location">
                        <option value=Asia>Asia</option>
                        <option value=Africa>Africa</option>
                        <option value=NorthAmerica>North America</option>
                        <option value=SouthAmerica>South America</option>
                        <option value=Antarctica>Antarctica</option>
                        <option value=Europe>Europe</option>
                        <option value=Australia>Australia</option>
                    </optgroup>
                </select> <br/><br/>
                <!--                    Device: <input type="text" name="password"> * <br/><br/>-->
            </div>

            <div class="checkBox">
                Select a account type:<br/><br/>
                <input type="radio" id="player" name="type" value="player">
                <label for="regularmember">Player</label> * <br/><br/>
                <input type="radio" id="producer" name="type" value="producer">
                <label for="producer">Producer</label>
            </div>
            <a href="Player-Bank.php">
                <input class="SignUpButton" type="submit" value="Sign up"/>
            </a>
            <a href="Player-Bank.php">
                <input class="SignUpButton" type="submit" value="To Bank"/>
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
