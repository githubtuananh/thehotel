<!-- http://paoshotel.com/#prettyPhoto -->
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
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/home1.css">
    <style>

    </style>
</head>
<body>
<div class="main">
<div class=" slide1" id="header">
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
                <?php 
                    if(!empty($data['welcom'])){
                        $row = mysqli_fetch_array($data['welcom']);
                        $username = $row['name'];
                        echo "<br>Xin chào " . $username .'</br>';
                    }
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

<div class="content">
    <div class="content-left">
        <p style="margin-bottom:20px;margin-top:40px;color:#f36b21;font-size:25px;font-weight:bold;text-align:center;">VỀ CHÚNG TÔI</p>
        <div style="opacity:0.8;text-align :justify;margin:0 60px;line-height:1.6;font-size:15px">
            <P style="margin-bottom:20px">Tọa lạc tại vị trí đắc địa trên sườn đồi với tầm nhìn ôm trọn núi non hùng vĩ, những thửa ruộng bậc thang mướt xanh và thung lũng Mường Hoa thơ mộng, Pao’s Sapa Leisure Hotel là một trong 
                những khách sạn 5 sao nổi bật tại thị trấn Sapa. </P>
            <P>Được đầu tư và vận hành bởi CTX Holdings, Pao’s Sapa Leisure Hotel mang đến cho du khách 223 phòng nghỉ mang đậm bản sắc văn hóa địa phương, hòa quyện tinh tế cùng nội thất tiêu chuẩn và tiện nghi hoàn hảo. Sở hữu những đường cong duyên dáng được thiết kế hài hòa với cảnh quan thiên nhiên xung quanh, Pao’s Sapa Leisure Hotel chắc chắn
                à điểm dừng chân lý tưởng để thư giãn và khơi dậy những giác quan của bạn.</P>
        </div>
        <div class="btn-bonus">Xem thêm</div>
        </div>
    <div class="content-right">
        <div>
            <img style="width:610px;height:368px" src="http://paoshotel.com/files/images/ab/Garden_5.jpg" alt="">
        </div>
    </div>
</div>
<div class="content1">
    <p style="margin-bottom:20px;padding-top:45px;font-size:34px;font-weight:bold;text-align:center;">PHÒNG KHÁCH SẠN</p>
    <p style="margin-bottom:35px;margin-left:153px;margin-right:153px;line-height:1.6; opacity:0.9">223 phòng nghỉ từ tiêu chuẩn đến cao cấp được bố trí hài hòa trong khuôn viên khách sạn. Tất cả các phòng nghỉ đều sở hữu tiện nghi đẳng cấp, không gian khoáng đạt cùng hiên ban công lãng 
        mạn với tầm nhìn bao quát khung cảnh thiên nhiên kỳ vĩ.</p>
    <div class="list-room">
        <div class="item-room">
            <img src="http://paoshotel.com/files/images/Room/Deluxe-Twin_4.jpg" alt="">
            <p class="name">Phòng khách sạn</p>
            <p class="des">Với diện tích 30m2, mang đến không gian sang trọng thoải mãi.....</p>
        </div>
        <div class="item-room">
            <img src="http://paoshotel.com/files/images/Room/%C4%90%E1%BA%A1i%20di%E1%BB%87n.jpg" alt="">
            <p class="name">Phòng khách sạn</p>
            <p class="des">Với diện tích 40m2, mang đến không gian sang trọng thoải mãi.....</p>
        </div>
        <div class="item-room">
            <img src="http://paoshotel.com/files/images/Room/premium-deluxe/%C4%90%E1%BA%A0I-DI%E1%BB%86N.jpg" alt="">
            <p class="name">Phòng khách sạn</p>
            <p class="des">Với diện tích 50m2, mang đến không gian sang trọng thoải mãi.....</p>
        </div>
    </div>
</div>

<div class="img-footer">
    
</div>
<?php      
    if(!empty($data['block'])){
        require_once("./mvc/views/block/".$data['block'].".php");
    } 
?>
</div>
</div>
</body>
    <script>
        $(document).ready(function(){
            var i=2
            setInterval(function(){
                $('#header').attr('class','slide'+i)
                i=i+1
                if(i>=6){
                    i=1
                }
            },2000)
        })
        $('.item-room').click(function(){
            console.log(123)
            window.location.href = '/PHP/KHACHSAN/product/show'
        })

        
    </script>
</html>





