<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/login_register.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Login</title>
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
                    <input type="text" autocomplete="off" placeholder="Username" name="input_username" required>
                    <input type="password" placeholder="Password" name="input_password" required>

                    <br><br><br>

                    <button style="float: left;" type="submit" value="Submit">Login</button>
                    <button style="float: right;" type="reset">Cancel</button>
                    <button style="width: 100%" type="button" onclick="window.location.href='register.php'">Register</button>
                </form>
            </div>
    </div>
</div>

</body>
</html>
<?php

// Function used for logging to console
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

// Runs when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $input_username = $_POST['input_username'];
    $input_password = $_POST['input_password'];
    //console_log($username);
    //console_log($password);

    $db = file_get_contents("data.json");
    $data = json_decode($db, true);
    $users = $data["users"];
    //console_log($users);

    foreach($users as $user){
        $username = $user["username"];
        if($username == $input_username){
            $password = $user["password"];
            // TODO: Use password_verify() for security reasons
            if(password_verify($input_password, $password)){
                $_SESSION["username"] = $username;
                $_SESSION["fname"] = $user["first_name"];
                header('Location: ./home.php');
            }
        }
    }
    // Runs if incorrect user/password entered
    echo '
        <div class = full_wrapper_content style="z-index: -1">
            <div class = centered>
                <p style = "font-family: Arial, Helvetica, sans-serif; color: red;">Invalid username or password entered, please try again</p>
            </div> 
        </div>  
        @RenderBody()      
    ';
}
?>