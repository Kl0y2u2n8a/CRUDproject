<?php
    function isEmpty($name, $team, $nationality, $position, $gender){
        if(empty($name) || empty($team) || empty($nationality) || empty($position) || empty($gender)){
            return true;
        }
        return false;
    }


    function createPlayer($conn, $pname, $team, $nationality, $position, $gender,$lang){
        $sql = "INSERT INTO players (pname, team, nationality, position, gender) 
        VALUES (?, ?, ?, ?, ?);";
        
        // echo "$name." / ".$team." / ". $nationality. " / " . $position . " / ". $gender;

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            if($lang == "en"){
                header('location: ../index.php?error=stmtfailed');
                exit();
            }
            else if($lang == "jp"){
                header('location: ../index.jp.php?error=stmtfailed');
                exit();
            }
            else if($lang == "tw"){
                header('location: ../index.tw.php?error=stmtfailed');
                exit();
            }
        }

        mysqli_stmt_bind_param($stmt, "sssss", $pname, $team, $nationality, $position, $gender);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }

    function updatePlayer($conn, $pname, $team, $nationality, $position, $gender,$lang){
    
        
    }
?>