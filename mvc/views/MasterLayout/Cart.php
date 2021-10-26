
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt phòng</title>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/img/icon/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/cart.css">
</head>
<body>
    <div class="container" style="height:1000px">

        <div class="header">
            <a href="/PHP/KHACHSAN/product/show" class="title">THE HOTEL</a>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <span class="wall"></span>
            <?php 
            if(isset($_SESSION['user'])){
            ?>
                <a class='account' href="/PHP/KHACHSAN/home/account">Tài khoản</a>
                <a class='account' href="/PHP/KHACHSAN/home/logout">Đăng xuất</a>
            <?php
            }
            else{
            ?>
                <a class='account' href="/PHP/KHACHSAN/home/register">Đăng ký </a>
                <a class='account' href="/PHP/KHACHSAN/home/login">Đăng nhập</a>
            <?php
            }
            ?>       
        </div>
        <div class="box-date">
            <form class='form-date' action="./updatePrice" method="post">
                <input required type="date" name="arrival">
                <input type="date" name="leave">
                <input class="nGuest" type="text" name="guest" placeholder="Số người">
                <div type="" name="btn"  class="btn btn-date select btn-primary">Đồng ý</div>
            </form>  
        </div>
        <div class="main">
            <div class="form-info-guest">
                <div style="padding: 30px 20px">
                    <div style="display: flex; justify-content:space-between;">
                        <h3 style="font-size:24px;margin-bottom:20px;border-bottom: 1px solid #ccc; padding-bottom:25px">Thông tin của bạn</h3>
                        <p class="mess"></p>
                    </div>
                    <div class="infoGuest">
                        <div class='form'>
                            <form action="./book" method="post">
                                <div style="display:flex;justify-content:space-between;margin-bottom:20px">
                                    <input value = ""  type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Full Name">
                                    <input value = ""  type="text" class="form-control" name="sdt" aria-describedby="emailHelp" placeholder="Số điện thoại">
                                </div>
                                
                                <div style="display:flex;justify-content:space-between;">
                                    <input value = ""  type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Địa chỉ" >
                                    <input value = ""  type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                               
                                    <p style="margin-top:20px;font-size:14px;color:#333333">Yêu cầu khác</p>
                                    <textarea class="form-control" name="mess" rows="5" cols="10" placeholder="Lời nhắn">
                                       
                                    </textarea>

                                    <div  type="" name="btn" id="book-room" class="btn btn-primary">BOOK</div>
                            </form>  
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-info">
                <div class="info-img">
                    <img class="img-room" src="<?php echo $data['img'] ?>" alt="">
                    <div class="info-room">
                        <p class="name-room"><?php echo $data['name'] ?></p>
                        <div class='icon-room'>
                            <p><i class="fa fa-male" aria-hidden="true"></i> 5 người</p>
                            <p><i class="fa fa-bed" aria-hidden="true"></i> 1 phòng ngủ</p>
                            <p><i class="fa fa-bath" aria-hidden="true"></i> 1 nhà tắm </p>
                        </div>
                        <div class='detail-room'>
                            <p>30m²•Garden view•Non-smoking•Air conditioned•Wireless Int
                                ernet•Room Safe•Daily Room Service•Cable/Satellite TV•Desk•A
                                larm Clock•Balcony•Iron/Ironing board•Lift/Elevator Access•Linen 
                                and Towels Provided•Shower - separate
                            </p>
                            <p> •No Breakfast included</p>
                            <p>•No Hotel's Facilities included</p>
                        </div>
                    </div>
                </div>
                <div class="slect">
                    <div class='bonus'>
                        <p><i class="fa fa-check" aria-hidden="true"></i> Miễn phí hủy</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i> Miễn phí xách đồ</p>
                    </div>
                    <div class='ajax'>
                        <p class="price">VND <?php echo $data['price'] ?></p>
                        <p class="number-date">Giá cho 1 đêm </p>
                    </div>
                    <div class='choose'>Chọn</div>
                </div>
            </div>
            <div class="box-order ">
                <div class="detail-order">
                    <p>Vui lòng chọn phòng để tiếp tục</p>
                </div>
                <button class="coutinue prevent">Tiếp tục</button>
            </div>
            <div class="box">
                <div class="box-order1 ">

                </div>
                <button style="border:none;position:absolute; bottom:35px " class="coutinue allow">Tiếp tục</button>              
            </div>
           
        </div>
    </div>
</body>
    <script src="/PHP/KHACHSAN/public/js/cart.js"></script>
</html>

