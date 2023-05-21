<?php

    include ('conn.php');
    $contentArray = array();
    $rowsArray = array();

    if(empty($_POST['iload'])){
        $vlimit = 1;
    } else {
        $vlimit = $_POST['iload'];
    }
    
    if(!isset($_POST['oset'])){
        $oset = 5;
    } else {
        $oset = $_POST['oset'];
    }
    $contentArray['error'] = $_POST['oset'];
    $contentArray['vlimit'] = $vlimit;
    $contentArray['oset'] = $oset;

    $query = "SELECT * FROM blog_posts ORDER BY id ASC LIMIT ".$vlimit." OFFSET ".$oset;
    $result = mysqli_query($connection, $query);

    while($row = $result->fetch_array()){
        $rowsArray[] = array(
            "id" => $row['id'],
            "content" => $row['content'],
            "date" => $row['date']
        );
    }

    $contentArray['content'] = $rowsArray;

    echo json_encode($contentArray);
?>
