<?php
    defined('DB_HOSTNAME') or define('DB_HOSTNAME', 'localhost');
    defined('DB_USERNAME') or define('DB_USERNAME', '12345');
    defined('DB_PASSWD') or define('DB_PASSWD', '12345');
    defined('DB_NAME') or define('DB_NAME', 'scroll_project');

    $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWD, DB_NAME);
    if(!$connection){
        die ("[ERROR]: " . mysqli_connect_error());
    }
    
?>