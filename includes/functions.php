<?php
    function createPlayer($conn, $firstname, $lastname, $email, $nationality, $position, $gender){
        $sql = "INSERT INTO players (last_name, first_name, email, nationality, position, gender) 
        VALUES (?, ?, ?, ?, ?, ?);";
        
        // echo $firstname." / " .$lastname." / ".$email." / ". $nationality. " / " . $position . " / ". $gender;

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $lastname, $firstname, $email, $nationality, $position, $gender);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }
?>