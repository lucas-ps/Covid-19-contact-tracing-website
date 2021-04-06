<?php
// Log out user and send them to login page
if(session_status() === PHP_SESSION_ACTIVE){
    session_destroy();
}
$content = file_get_contents('login.php');
echo $content;
