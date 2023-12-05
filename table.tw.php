<?php
    include_once 'header.php';
?>  
<a class="nav-link active text-white-50" aria-current="page" href="table.en.php">選手列表</a>
<div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white-50"role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            語言
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark  text-white-50">
                            <li><a class="dropdown-item" href="table.jp.php"><img src="img/japan.png" width="12" height="12"> 日文</a></li>
                            <li><a class="dropdown-item" href="table.en.php"><img src="img/usa.png" width="12" height="12"> 英文</a></li>
                            <li><a class="dropdown-item" href="table.tw.php"><img src="img/taiwan.png" width="12" height="12"> 繁體中文</a></li>
                        </ul>
                    </li>
                </ul>
            </div>    
        </div>
    </div>

<div class="container">
    <a href="index.tw.php" class="btn btn-outline-light me-2 mb-2"  style="margin-top: 3%;">新增球員</a>

    <table class="table table-dark table-striped fs-5 table-hover text-center">
        <thead>
            <tr>
                <th scope="col">#</th> 
                <th scope="col">姓</th>
                <th scope="col">名</th>
                <th scope="col">球隊</th>
                <th scope="col">國籍</th>
                <th scope="col">守備位置</th>
                <th scope="col">性別</th>
                <th scope="col">行動</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * from players";
                $result = mysqli_query($conn, $sql);
                $count = 1;
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $count++ ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['team'] ?></td>
                        <td class="text-uppercase"><?php echo $row['nationality'] ?></td>
                        <td><?php echo $row['position'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="" class="link-light"><i class="fa-solid fa-pen-to-square fs-6 me-3"></i></a>
                            <a href="" class="link-light"><i class="fa-solid fa-trash-can fs-6"></i></a>
                        </td>
                        
                    </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</div>