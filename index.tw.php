<?php
    include_once 'header.php';
?>
    <a class="nav-link active text-white-50" aria-current="page" href="table.tw.php">選手列表</a>
    <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white-50"role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            語言
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark  text-white-50">
                            <li><a class="dropdown-item" href="index.jp.php"><img src="img/japan.png" width="12" height="12"> 日文</a></li>
                            <li><a class="dropdown-item" href="index.php"><img src="img/usa.png" width="12" height="12"> 英文</a></li>
                            <li><a class="dropdown-item" href="index.tw.php"><img src="img/taiwan.png" width="12" height="12"> 繁體中文</a></li>
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
                        無法連接到數據庫,請再輸入一次!
                        </div>';

                    }
                    else if($_GET["error"] == "emptyinput"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        請填寫全部空格!
                        </div>';
                    }
                    else if($_GET["error"] == "invalidnames"){
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        請輸入有效的名字!
                        </div>';

                    }
                    else if($_GET["error"] == "createsuccess"){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        你已成功新增球員!
                        </div>';

                    }
                }
            ?>
            <h3>新增新選手</h3>
            <p class="text-white-50">請填寫以下資料</p>
        </div>
        <form action="includes/form.tw.inc.php" method="post">
            <div class="container d-flex justify-content-center text-white text-center">
                <div class="row">
                    <div class="mb-3 col-sm-3 mx-auto">
                        <label class="form-label">選手名</label>
                        <input type="text" class="form-control text-center" name="pname" placeholder="大谷翔平">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">球隊</label>&nbsp;
                        <?php include 'teams.html' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">國籍</label>&nbsp;
                        <?php include_once 'nationality.html' ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">守備位置</label>&nbsp;
                        <?php include_once 'playingposition.html' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">性別</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                        <label for="male" class="form-input-label" style="color: #a8caea;">男性</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                        <label for="male" class="form-input-label" style="color: #e5c9d7">女性</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="bisex" value="bisexual">
                        <label for="male" class="form-input-label" style="color: #cf9fff;">雙性</label>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-outline-light me-2" >確認</button>
                <a href="index.tw.php"  class="btn btn-outline-light">取消</a>
            </div>
        </form>
    </div>
</body>
</html>