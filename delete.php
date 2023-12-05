<?php
    include "db.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM players WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: table.en.php?error=deletesuccess');
        exit();
    }
    else{
        echo "Failed: ". mysqli_error($conn);
    }
?>