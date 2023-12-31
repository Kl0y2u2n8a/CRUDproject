<?php
    include_once 'header.php';
    include_once 'db.php';
?>
        </div>
    </div>
    

    <div class="container">
        <div class="text-center text-white mb-4" style="margin-top: 3%;">
            <?php 
                if(isset($_GET['error'])){
                    
                    if($_GET["error"] == "stmtfailed"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Unable to add data to database, please try again!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "emptyinput"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please fill all the information!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "invalidnames"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please enter a valid first/last name!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "updatesuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        You have successfully update new information for the player!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                }
            ?>
            <h3>Edit Player Information</h3>
            <p class="text-white-50">Please click update after you change anything</p>
        </div>
        <?php
            $id = $_GET['id'];
            $sql= "SELECT * FROM players where id= $id LIMIT 1";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);

        ?>
        <form action="includes/edit.inc.php" method="post">
            <div class="container d-flex justify-content-center text-white text-center">
                <div class="row">

                    <input type="text" name="pid" style="display: none;" value="<?php echo $id ?>"></input>
                    <input type="text" name="lang" style="display: none;" value="en"></input>

                    <div class="mb-3 col-sm-2 mx-auto">
                        <label class="form-label">Player Name</label>
                        <input type="text" class="form-control text-center" name="pname" value="<?php echo $row['pname'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Team</label>&nbsp;
                        <?php include 'teams.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nationality</label>&nbsp;
                        <?php include 'nationality.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fielding Position</label>&nbsp;
                        <?php include 'playingposition.php' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Gender</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == "male")?'checked':'' ?>>
                        <label for="male" class="form-input-label" style="color: #a8caea;">Male</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == "female")?'checked':'' ?>>
                        <label for="male" class="form-input-label" style="color: #e5c9d7">Female</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="bisex" value="bisex">
                        <label for="male" class="form-input-label" style="color: #cf9fff;">Bisexual</label>
                    </div>
                </div>
            </div>
            
            <div class="container d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-outline-light me-2 mb-3" >Update</button>
                <a href="table.en.php"  class="btn btn-outline-light mb-3">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>

