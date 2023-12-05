<?php
    
    if(isset($_POST["submit"])){
        $name = $_POST["pname"];
        $team = $_POST["teams"];
        $nationality = $_POST["nationality"];
        $position = $_POST["pposition"];
        $gender = $_POST["gender"];

        require_once "../db.php";
        require_once "functions.php";
        // check if empty
        if(isEmpty($name, $team, $nationality, $position, $gender)){
            header("location: ../index.jp.php?error=emptyinput");
            exit();
        }
        // check valid names
        createPlayer($conn, $name, $team, $nationality, $position, $gender, "jp");

        
        header("location: ../index.jp.php?error=createsuccess");
        exit();
    }
?>