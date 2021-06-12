<?php
session_start();
if (!(isset($_SESSION["fname"]))){
    header('Location: ./login.php');
}
$name = $_SESSION["fname"];

// Getting reported infections using web service
// TODO: Custom time windows, distances, etc
/*$url = "http://ml-lab-7b3a1aae-e63e-46ec-90c4-4e430b434198.ukwest.cloudapp.azure.com:60999/infections?ts=7";
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPGET, true);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
curl_close($handle);

$data = json_decode($output);*/

$db = file_get_contents("data.json");
$db_data = json_decode($db, true);
$black_markers = $db_data["reported_infections"];
// TODO: Calculate which markers should be red
?>

<html>

<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/home.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="scripts/marker_methods.js"></script>
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
    <div class= map_wrapper id="map">
        <a href="#">
            <img class = "map" src="images/exeter.jpg" ismap>
        </a>
        <script>
            // Access the elements of the array
            var markers_array = <?php echo json_encode($db_data["reported_infections"]); ?>;
            // Pass to add_all_markers function
            markers_array.forEach(create_marker);
            function create_marker(value) {
                var x = value[0];
                var y = value[1];
                console.log(value);
                marker_methods(x, y, true);
            }
        </script>
    </div>
    <div class="left_home_wrapper">
        <p id="welcome_text"> Hi <?php echo $name?>, you might have had a
            connection to the infected person at the location shown in red</p>
        <!-- TODO: Make map info show at bottom -->
        <p id="map_info_text">Click on the marker to see details about the infection</p>
    </div>
</div>

</body>

</html>