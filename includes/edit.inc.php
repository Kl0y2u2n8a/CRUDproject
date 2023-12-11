<?php
    
    if(isset($_POST["submit"])){
        $id = $_POST["pid"];
        $name = $_POST["pname"];
        $team = $_POST["teams"];
        $nationality = $_POST["nationality"];
        $position = $_POST["pposition"];
        $gender = $_POST["gender"];
        $lang = $_POST["lang"];

        require_once "../db.php";
        require_once "functions.php";
        // check if empty
        if(isEmpty($name, $team, $nationality, $position, $gender)){
            header("location: ../edit.en.php?error=emptyinput");
            exit();
        }

        // check valid names
        updatePlayer($conn, $id, $name, $team, $nationality, $position, $gender, $lang);
        
        // exit();
    }
?>