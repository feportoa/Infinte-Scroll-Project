<?php
    include ('conn.php');

    for($i = 0; $i < 25; $i++){
        $file = file_get_contents('https://loripsum.net/api');
        $uTime = time();
        $query = "INSERT INTO `blog_posts` (`content`, `date`) VALUES ('".$file."', ".$uTime.")"; 
        $result = mysqli_query($connection, $query);
    }

    
?>