<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/img/icon/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/HomeAdmin1.css">
</head>
<body>
    <div class="container">
        <div class="right">
            <h3><a href="/PHP/KHACHSAN/admin/show">ADMIN</a></h3>
            <i class="fa fa-tachometer" aria-hidden="true">  Dashboard</i>

            <p class='manage'><i class="fa fa-cog" aria-hidden="true"></i> Manage</p>
            <a href="/PHP/KHACHSAN/admin/manageOrder"><i class="fa fa-wrench" aria-hidden="true"></i> Quản lý đơn hàng</a>
            <a href="/PHP/KHACHSAN/admin/manageGuest"><i class="fa fa-wrench" aria-hidden="true"></i> Quản lý khách hàng</a>
            <a id="room" href="/PHP/KHACHSAN/admin/manageRoom"><i class="fa fa-wrench" aria-hidden="true"></i> Quản lý phòng</a>
            <a class="logout" href="/PHP/KHACHSAN/admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a>
        </div>
        <div class="left">
            <div class='header'>
            <?php      
                require_once("./mvc/views/block/home.php"); 
            ?>
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
