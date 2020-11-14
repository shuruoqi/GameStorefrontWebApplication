<?php
    include 'connect.php';
    // var_dump($_POST);

    $id = 0;
    for ($i = 1; $i <= 2; $i++) {
        $n = floor(rand(1, 500) * 20 + 10);
        $id = $id + $n;
    }
    // echo "Your id is: ". $id. "  ";

    if (isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["location"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $location = $_POST['location'];

        $conn = OpenCon();
        if (isset($_POST['prod'])) {
            $sql = "INSERT INTO producer (companyID, companyName, companyPW, location,totalProduced) VALUES ('$id', '$username','$password','$location','0')";
        } else {
            $sql = "INSERT INTO player (playerID, username, playerPW, location) VALUES ('$id', '$username', '$password', '$location')";
        }
        if ($conn->query($sql) === TRUE) {
            echo "New user added---Your id is: ". $id;
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
                        <option value=North America>North America</option>
                        <option value=South America>South America</option>
                        <option value=Antarctica>Antarctica</option>
                        <option value=Europe>Europe</option>
                        <option value=Australia>Australia</option>
                    </optgroup>
                </select> <br/><br/>
                <!--                    Device: <input type="text" name="password"> * <br/><br/>-->
            </div>

            <div class="checkBox">
                Select a account type:<br/><br/>
                <input type="radio" id="player" name="reg" value="dewey">
                <label for="regularmember">Player</label> * <br/><br/>
                <input type="radio" id="producer" name="prod" value="louie">
                <label for="producer">Producer</label>
            </div>

            <a href="PopUp.php">
                <input class="SignUpButton" type="submit" value="Sign up"/>
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
