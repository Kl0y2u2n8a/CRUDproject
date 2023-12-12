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
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        // check valid name
        if(isInvalid($name)){
            header("location: ../index.php?error=invalidname");
            exit();
        }
        // check if player is already in the list
        if(isExisted($conn, $name)){
            header("location: ../index.php?error=existedname");
            exit();
        }


        createPlayer($conn, $name, $team, $nationality, $position, $gender, "en");

        
        header("location: ../index.php?error=createsuccess");
        exit();
    }
?>