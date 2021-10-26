<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/account.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/img/icon/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/account.css">
</head>
<body>
    <div class="container">
        <div class="right">
            <h3><a href="/PHP/KHACHSAN/home/show">ACCOUNT</a></h3>
            <i class="fa fa-user-circle-o" aria-hidden="true">
                <?php 
                    if(!empty($data['welcom'])){
                        $row = mysqli_fetch_array($data['welcom']);
                        $username = $row['name'];
                        echo  $username;
                    }
                ?>
            </i>

            <p class='manage'><i class="fa fa-cog" aria-hidden="true"></i> Manage</p>
            <a href="/PHP/KHACHSAN/home/handlePassword"><i class="fa fa-wrench" aria-hidden="true"></i> Thay đổi mật khẩu</a>
            <a href="/PHP/KHACHSAN/product/myOrder"><i class="fa fa-wrench" aria-hidden="true"></i> Đơn đặt phòng</a>
            <a id="guest" href="/PHP/KHACHSAN/home/handlePassword"><i class="fa fa-wrench" aria-hidden="true"></i> Thay đổi Email</a>
            <a class="logout" href="/PHP/KHACHSAN/home/show"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
            <a class="home" href="/PHP/KHACHSAN/product/show"><i class="fa fa-bed" aria-hidden="true"></i> Sản phẩm</a>
            <a class="home" href="/PHP/KHACHSAN/home/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a>

        </div>
        <div class="left">
            <div class='header'>
                    <h2 class="Hello-account">Manage</h2>
            </div>
            <div class='table'>
                <?php      
                    if(!empty($data['block'])){
                        require_once("./mvc/views/block/".$data['block'].".php");
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>