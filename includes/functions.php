<?php
    function isEmpty($name, $team, $nationality, $position, $gender){
        if(empty($name) || empty($team) || empty($nationality) || empty($position) || empty($gender)){
            return true;
        }
        return false;
    }

    function isInvalid($name){
        if(preg_match("^[a-zA-Z].*[\s\.]*$",$name)){
            return true;
        }
        return false;
    }

    function isExisted($conn, $name){
        $sql= "SELECT * FROM players where pname = '$name'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $count = mysqli_num_rows($result);
            if($count > 0){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            echo "Failed: ".mysqli_error($conn);
        }
    }


    function createPlayer($conn, $pname, $team, $nationality, $position, $gender,$lang){
        $sql = "INSERT INTO players (pname, team, nationality, position, gender) 
        VALUES (?, ?, ?, ?, ?);";
        

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

    function updatePlayer($conn, $id, $pname, $team, $nationality, $position, $gender, $lang){
        $sql = "UPDATE players SET pname = '$pname', team = '$team', nationality = '$nationality', position = '$position', gender = '$gender' WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            if($lang == "en"){
                header('location: ../table.en.php?error=updatesuccess');
                exit();
            }
            else if($lang == "jp"){
                header('location: ../table.jp.php?error=updatesuccess');
                exit();
            }
            else if($lang == "tw"){
                header('location: ../table.tw.php?error=updatesuccess');
                exit();
            }
        }
        else{
            echo "Failed: ". mysqli_error($conn);
        }

    }
?>