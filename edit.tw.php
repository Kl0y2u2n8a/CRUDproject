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
                        出現錯誤 請再重試一次!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "emptyinput"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        請輸入所有資料!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "invalidnames"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        請輸入有效的名字!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "updatesuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        成功更新選手資料!
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                }
            ?>
            <h3>編輯選手資料</h3>
            <p class="text-white-50">編輯完後請按下"儲存"按鈕</p>
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
                    <input type="text" name="lang" style="display: none;" value="tw"></input>

                    <div class="mb-3 col-sm-2 mx-auto">
                        <label class="form-label">選手名</label>
                        <input type="text" class="form-control text-center" name="pname" value="<?php echo $row['pname'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">球隊</label>&nbsp;
                        <?php include 'teams.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">國籍</label>&nbsp;
                        <?php include 'nationality.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">守備位置</label>&nbsp;
                        <?php include 'playingposition.php' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">性別</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == "male")?'checked':'' ?>>
                        <label for="male" class="form-input-label" style="color: #a8caea;">男性</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == "female")?'checked':'' ?>>
                        <label for="male" class="form-input-label" style="color: #e5c9d7">女性</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="bisex" value="bisex">
                        <label for="male" class="form-input-label" style="color: #cf9fff;">雙性</label>
                    </div>
                </div>
            </div>
            
            <div class="container d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-outline-light me-2 mb-3" >儲存</button>
                <a href="table.tw.php"  class="btn btn-outline-light mb-3">取消</a>
            </div>
        </form>
    </div>
</body>
</html>

