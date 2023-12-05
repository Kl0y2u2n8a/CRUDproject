<?php
    function createPlayer($conn, $firstname, $lastname, $team, $nationality, $position, $gender){
        $sql = "INSERT INTO players (last_name, first_name, team, nationality, position, gender) 
        VALUES (?, ?, ?, ?, ?, ?);";
        
        // echo $firstname." / " .$lastname." / ".$team." / ". $nationality. " / " . $position . " / ". $gender;

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $lastname, $firstname, $team, $nationality, $position, $gender);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }
?>