<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/login_register.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div id="title_container">
    <h1 id="title">
        COVID - 19 Contact Tracing
    </h1>
</div>
<div class = full_wrapper_content>
    <div class = centered">
        <img class="watermark" src="images/watermark.png">
        <div class = login_register_wrapper>
            <form class = "centered" style="width: 40%" method="POST">
                <input type="text" autocomplete="off" placeholder="First Name" name="input_fname" required >
                <input type="text" autocomplete="off" placeholder="Surname" name="input_sname" required >
                <input type="text" autocomplete="off" placeholder="Username" name="input_username" required >
                <input type="password" placeholder="Password" name="input_password" required >

                <br><br><br>

                <button style="width: 100%" type="submit">Register</button>

            </form>
        </div>
    </div>
</div>

</body>

<?php
// Function used for logging to console
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $fname = $_POST['input_fname'];
    $sname = $_POST['input_sname'];
    $username = $_POST['input_username'];
    $password = password_hash($_POST['input_password'], PASSWORD_DEFAULT);
    console_log($password);

    $db = file_get_contents("data.json");
    $data = json_decode($db, true);
    //$users = $data["users"];
    $new_user = array("first_name"=>$fname, "surname"=>$sname, "username"=>$username, "password"=>$password);
    array_push($data["users"], $new_user);
    $json = json_encode($data);
    file_put_contents("data.json", $json);
    console_log($data);

    // Logging user in after successful account creation
    $_SESSION['username'] = $username;
    header('Location: ./home.php');
}
?>