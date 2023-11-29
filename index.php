<?php
    include_once 'header.php';
?>

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
                if(isset($_GET["error"])){
                    
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
                    else if($_GET["error"] == "invalidemail"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please enter a valid email address!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "emailexist"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        This email has been registered, please try another email!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "createsuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        You have successfully add a new player!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                }
            ?>
            <h3>Add New Player</h3>
            <p class="text-white-50">Please complete the form to create new user</p>
        </div>
        <form action="includes/form.en.inc.php" method="post">
            <div class="container d-flex justify-content-center text-white">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lName" placeholder="Ohtani">
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fName" placeholder="Shohei">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="example@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nationality</label>&nbsp;
                        <?php include 'nationality.html' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fielding Position</label>&nbsp;
                        <?php include 'playingposition.html' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Gender</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                        <label for="male" class="form-input-label" style="color: #a8caea;">Male</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                        <label for="male" class="form-input-label" style="color: #e5c9d7">Female</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="bisex" value="bisex">
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