<?php
session_start();
if (!(isset($_SESSION["fname"]))){
    header('Location: ./login.php');
}
?>

<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/report_settings.css">
    <link rel="stylesheet" href="styles/_layout.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!--Inherited layout used for every page (sidenav and title)-->
<div class="layout">
</div>
<script>
    $(function(){
        $(".layout").load("_layout.html");
    });
</script>
<!--end of layout-->

<div class = wrapper_content>
    <p id="heading">Report an infection</p>
    <hr class="horizontal_line">
    <div style="margin-left: 15%; margin-right: 15%;"
        <p id="info">Please report the date and time when you were tested positive for COVID-19.</p>

    <div class = "centered" style = "width:70%; position: absolute;">
        <form method="POST">
            <input type="date" style="width: 57%" autocomplete="off" placeholder="Date" name="date" required>
            <input type="time" style="width: 57%" placeholder="Time" name="time" required>

            <br>

            <button style = "float: left; width: 20%; font-size: 2vw"class="add_visit_button" type="submit">Report</button>
            <button style = "float: right; width: 20%; font-size: 2vw" class="add_visit_button" type="reset">Cancel</button>

        </form>
    </div>

</body>