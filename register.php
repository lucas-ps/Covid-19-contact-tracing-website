<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/login_register.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
                <input type="text"  placeholder="First Name" name="input_fname" required >
                <input type="text" placeholder="Surname" name="input_sname" required >
                <input type="text"  placeholder="Username" name="input_username" required >
                <input type="password" placeholder="Password" name="input_password" required >

                <br><br><br>

                <button style="width: 100%" type="submit">Register</button>

            </form>
        </div>
    </div>
</div>

</body>

// TODO: Register page