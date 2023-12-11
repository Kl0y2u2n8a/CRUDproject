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
                        エラーが出てきました。もう一度やり直してください！
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "emptyinput"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        全部の情報を入力してください！
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "invalidnames"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        有効な名前を入力してください！
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                    else if($_GET["error"] == "updatesuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        選手情報更新成功しました！
                        <button type="button" class="btn-close" data-base-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                }
            ?>
            <h3>選手情報編集</h3>
            <p class="text-white-50">情報を入力して更新ボタンを押してください</p>
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
                    <input type="text" name="lang" style="display: none;" value="jp"></input>

                    <div class="mb-3 col-sm-2 mx-auto">
                        <label class="form-label">選手名</label>
                        <input type="text" class="form-control text-center" name="pname" value="<?php echo $row['pname'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">球団</label>&nbsp;
                        <?php include 'teams.php' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">国籍</label>&nbsp;
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
                        <label for="male" class="form-input-label" style="color: #cf9fff;">バイセクシャル</label>
                    </div>
                </div>
            </div>
            
            <div class="container d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-outline-light me-2 mb-3" >更新</button>
                <a href="table.jp.php"  class="btn btn-outline-light mb-3">キャンセル</a>
            </div>
        </form>
    </div>
</body>
</html>

