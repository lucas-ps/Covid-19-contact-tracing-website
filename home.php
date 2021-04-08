<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/home.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Home</title>
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
    <p id="heading">Status</p>
    <hr class="horizontal_line">
    <img class = "map" id="map"src="images/exeter.jpg">
    <div class="left_home_wrapper">
        <p id="welcome_text"> Hi <?php echo $name?>, you might have had a
            connection to the infected person at the location shown in red</p>
        <!-- TODO: Make map info show at bottom -->
        <p id="map_info_text">Click on the marker to see details about the infection</p>
    </div>
</div>

</body>

</html>

<!-- TODO: PHP for checking if user has been in contact->