<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/report_settings.css">
    <link rel="stylesheet" href="styles/_layout.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Settings</title>
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
    <p id="heading">Alert Settings</p>
    <hr class="horizontal_line">
    <div style="margin-left: 15%; margin-right: 15%;"
    <p id="info">Here you may change the alert distance and the time span for which the contact tracing will be
        performed.</p>

    <div class = "centered" style = "width:70%; position: absolute;">
        <form method="POST">
            <div class="form-element">
                <label>window</label>
                <input type="number" style="width: 57%" autocomplete="off" name="input_window" required min="1", max="4">
            </div>
            <div class="form-element">
                <label>distance</label>
                <input type="number" style="width: 57%" autocomplete="off" name="input_distance" required min="0", max="500">
            </div>
            <br>

            <button style = "float: left; width: 20%; font-size: 2vw"class="add_visit_button" type="submit">Report</button>
            <button style = "float: right; width: 20%; font-size: 2vw" class="add_visit_button" type="reset">Cancel</button>

        </form>
    </div>
</div>

</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $window = $_REQUEST["input_window"];
    $distance = $_REQUEST["input_distance"];
    setcookie("window", $window);
    setcookie("distance", $distance, path: "/");
}
