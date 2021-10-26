<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/img/icon/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/product1.css">
    <style>

    </style>
</head>
<body>
<div class="main">
<div class="header">
    <div class="logo">
       <h3 class="name-hotel">HOTEL</h3>
       <div class="star" >
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
       </div>
    </div>
    <div class="nav-bar" >
        <ul class="menu-left">
            <li><a href="/PHP/KHACHSAN/home/show">Trang chủ</a></li>
            <li><a href="/PHP/KHACHSAN/product">Sản phẩm</a></li>
        </ul>

        <ul class="menu-right">
        <?php 
            if(isset($_SESSION['user'])){
            ?>
                <li><a href="/PHP/KHACHSAN/home/account">Tài khoản</a></li>
                <li><a href="/PHP/KHACHSAN/home/logout">Đăng xuất</a></li>
            <?php
            }
            else{
                ?>
                    <li><a href="/PHP/KHACHSAN/home/register">Đăng ký </a></li>
                    <li><a href="/PHP/KHACHSAN/home/login">Đăng nhập</a></li>
                <?php
            }
        ?>       
        </ul>
    </div>
</div>
<div  style="margin: 20px 0; display:flex;" >
    <input class="search" type="text" name="searchRoom" value=""  placeholder="Nhập để tìm kiếm">
    <form action="/action_page.php" style="margin-left:100px;">
    <label for="cars">Chọn giá phòng:</label>
    <select name="cost-choose" id="cost">
        <option value="0">Tất cả</option>
        <option value="3000000">Trên 3000000</option>
        <option value="5000000">Trên 5000000</option>
        <option value="10000000">Trên 10000000</option>
        <option value="15000000">Trên 15000000</option>
    </select>
    </form>
</div>
<div class="content">
    <div class="product">
        <?php 
            if(!empty($data['room'])){
                while($row = mysqli_fetch_array($data['room'])){
                    if($row['disable']==0){
                        ?>
                            <div class="box-room">
                                <img class="img-room" src="<?php echo $row['img'] ?>" alt="">
                                <div class="info-room">
                                    <div class="room">
                                        <p class="name-room"><?php echo $row['name'] ?></p>
                                        <span>Với diện tích 30m2, phòng Deluxe mang đến không gian.....</span>
                                    </div>
                                    <div class="book-room">
                                        <p class="cost-room"><span> Giá niêm yết</span> <i class="cost"><?php echo $row['cost'] ?></i></p>
                                        <a class="btn-book" href="/PHP/KHACHSAN/product/selectRoom/<?php echo $row['idRoom']?>">Đặt phòng ngay</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
            } 
        }
        ?>
    </div>
</div>
<?php      
    if(!empty($data['block'])){
        require_once("./mvc/views/block/".$data['block'].".php");
    } 
?>
</div>
</div>
</body>
<script src="/PHP/KHACHSAN/public/js/guestSearchRoom1.js"></script>

<!-- <script src="/PHP/KHACHSAN/public/js/product.js"></script> -->
</html>

