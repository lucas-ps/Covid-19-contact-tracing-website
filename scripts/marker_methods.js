function marker_methods(x, y, red){
    var map = document.getElementById("map")

    var positionInfo = map.getBoundingClientRect();
    var height = positionInfo.height;
    var width = positionInfo.width;

    var marker = document.createElement("img");
    marker.className = "marker"
    if (red){
        marker.src = "images/marker_red.png";
    } else{
        marker.src = "images/marker_black.png";
    }
    marker.style.top = (y/100 * height) + 'px';
    marker.style.left = (x/100 * width) + 'px';
    marker.id = "marker";
    marker.onclick= function(){get_marker_info(x,y)};
    oldMarker = document.getElementById("marker");
    if (oldMarker){
        map.removeChild(oldMarker);
    }
    map.appendChild(marker);
    console.log("Marker added")

}
