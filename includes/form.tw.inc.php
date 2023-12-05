<?php
    
    if(isset($_POST["submit"])){
        $lastname = $_POST["lName"];
        $firstname = $_POST["fName"];
        $team = $_POST["teams"];
        $nationality = $_POST["nationality"];
        $position = $_POST["pposition"];
        $gender = $_POST["gender"];

        require_once "../db.php";
        require_once "functions.php";
        // check if empty
        // check email exist
        // check valid email
        // check valid names
        createPlayer($conn, $lastname, $firstname, $team, $nationality, $position, $gender);

        
        header("location: ../index.tw.php?error=createsuccess");
        exit();
    }
?>