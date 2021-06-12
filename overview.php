<?php
session_start();
if (!(isset($_SESSION["fname"]))){
    header('Location: ./login.php');
}

$db = file_get_contents("data.json");
$db_data = json_decode($db, true);
$reported_locations = $db_data["logged_locations"];
$locations_for_current_user = array();
foreach ($reported_locations as $report) {
    if ($report["username"] == $_SESSION["username"]) {
        array_push($locations_for_current_user, $report);
    }
}
?>

<html>
<head>
    <title>COVID - 19 Contact Tracing</title>
    <link rel="stylesheet" href="styles/_layout.css">
    <link rel="stylesheet" href="styles/overview.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>Overview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function deleteRow(id){
            // Removing from HTML
            var row = document.getElementById(id);
            row.parentNode.removeChild(row);
            // Removing from JSON
        }

    </script>
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

<div class="wrapper_content">

    <table class="overview_table" id="overview_table">
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Duration</th>
            <th>X</th>
            <th>Y</th>
        </tr>
            <?php
            $id = 0;
            foreach($locations_for_current_user as $location) {
            echo '<tr id = ' . $id . '>';
            echo '<td>' . $location["date"] . '</td>';
            echo '<td>' . $location["time"] . '</td>';
            echo '<td>' . $location["duration"] . '</td>';
            echo '<td>' . $location["x"] . '</td>';
            echo '<td>' . $location["y"] . '</td>';
            echo '<td> <img id = delete src=images/cross.png style="height: 50px;"  onclick=deleteRow('. $id .'); 
                deleteFromArray($location)></td>';
            $id++;
            }
            ?>
    </table>


</div>

</body>