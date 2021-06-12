<?php
session_start();
if (!(isset($_SESSION["fname"]))){
    header('Location: ./login.php');
}
?>

<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/add_visit.css">
    <link rel="stylesheet" href="styles/_layout.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="scripts/marker_methods.js"></script>
    <title>Add a new visit</title>
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
    <p id="heading">Add a new visit</p>
    <hr class="horizontal_line">

    <div class = "left_content_wrapper">
        <form style="width: 80%" method="POST">
            <input type="date" style="width: 100%" autocomplete="off" placeholder="Date" name="date" required>
            <input type="time" style="width: 100%" placeholder="Time" name="time" required>
            <input type="number" style="width: 100%" placeholder="Duration (mins)" name="duration" required min = 0>

            <div style = "position: absolute; bottom: 0%; width: 34%">
                <button class="add_visit_button" type="submit">Add</button>
                <button style = "margin-bottom: 10%" class="add_visit_button" type="reset">Cancel</button>
            </div>
        </form>
    </div>

    <div class= map_wrapper id="map">
        <img class = "map" src="images/exeter.jpg">
        <script>
            $(document).ready(function () {
                $("img").on("click", function (event) {
                    var map = document.getElementById("map");
                    var positionInfo = map.getBoundingClientRect();
                    var height = positionInfo.height;
                    var width = positionInfo.width;
                    var x = (event.offsetX);
                    x = x/width*100;
                    var y = (event.offsetY);
                    y = y/height*100;
                    marker_methods(x, y, false);
                });
            });


        </script>
    </div>
    <div class="left_wrapper">
    </div>
</div>

</body>