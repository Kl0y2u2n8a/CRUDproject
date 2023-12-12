<?php
    include_once 'header.php';
?>
    <a class="nav-link active text-white-50" aria-current="page" href="table.en.php">Player List</a>
    <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white-50"role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark  text-white-50">
                            <li><a class="dropdown-item" href="index.jp.php"><img src="img/japan.png" width="12" height="12"> Japanese</a></li>
                            <li><a class="dropdown-item" href="index.php"><img src="img/usa.png" width="12" height="12"> English</a></li>
                            <li><a class="dropdown-item" href="index.tw.php"><img src="img/taiwan.png" width="12" height="12"> Traditional Chinese</a></li>
                        </ul>
                    </li>
                </ul>
            </div>    
        </div>
    </div>
    

    <div class="container">
        <div class="text-center text-white mb-4" style="margin-top: 3%;">
            <?php 
                if(isset($_GET['error'])){
                    
                    if($_GET["error"] == "stmtfailed"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Unable to add data to database, please try again!
                        </div>';

                    }
                    else if($_GET["error"] == "emptyinput"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please fill all the information!
                        </div>';

                    }
                    else if($_GET["error"] == "invalidname"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please enter a valid name!
                        </div>';

                    }
                    else if($_GET["error"] == "existedname"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Player is already in the list, please enter a different player!
                        </div>';
                    }
                    else if($_GET["error"] == "createsuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        You have successfully add a new player!
                        </div>';

                    }
                }
            ?>
            <h3>Add New Player</h3>
            <p class="text-white-50">Please complete the form to create new user<br> <span style="color: red;">*You are not allow to change player name in the future* </span></p>
        </div>
        <form action="includes/form.en.inc.php" method="post">
            <div class="container d-flex justify-content-center text-white text-center">
                <div class="row">
                    <div class="mb-3 col-sm-3 mx-auto">
                        <label class="form-label">Player Name </label>
                        <input type="text" class="form-control text-center" name="pname" placeholder="Shohei Ohtani">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Team</label>&nbsp;
                        <?php 
                            $row['team'] = "";
                            include 'teams.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nationality</label>&nbsp;
                        <?php
                        $row['nationality'] = ""; 
                        include 'nationality.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fielding Position</label>&nbsp;
                        <?php 
                        $row['position'] = "";
                        include 'playingposition.php' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Gender</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                        <label for="male" class="form-input-label" style="color: #a8caea;">Male</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                        <label for="male" class="form-input-label" style="color: #e5c9d7">Female</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="bisex" value="bisexual">
                        <label for="male" class="form-input-label" style="color: #cf9fff;">Bisexual</label>
                    </div>
                </div>
            </div>
            
            <div class="container d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-outline-light me-2 mb-3" >Enter</button>
                <a href="index.php"  class="btn btn-outline-light mb-3">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>

