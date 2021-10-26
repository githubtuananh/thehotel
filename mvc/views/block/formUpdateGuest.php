<?php
        if(!empty($data['guest'])){
            while($row = mysqli_fetch_array($data['guest'])){
                $idRoom = $row['idRoom'];
                $name  = $row['name'];
                $username = $row['username'];
                $password = $row['PASSWORD'];
           } 
       }
?>
<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/form.css">
<div id="box-message" >
    <p class="message"></p>
</div>
<h2>Chỉnh sửa thông khách hàng</h2>
<div class='form'>
    <form action="../updateGuest" method="post">
        <div class="form-group">
            <label for="idRoom"><b>Thuê phòng</b></label>
            <input value = "<?php echo $idRoom ?>" type="text" class="form-control" name="idRoom" aria-describedby="emailHelp" placeholder="Enter id">
        </div>
        <div class="form-group">
            <label for="name"><b>Tên</b></label>
            <input value = "<?php echo $name ?>"  type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" >
        </div>
        <div class="form-group">
            <label for="username"><b>Tài khoản</b></label>
            <input disabled value = "<?php echo $username ?>"  type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter age" >
        </div>
        <!-- <div class="form-group">
            <label for="password"><b>Mật khẩu</b></label>
            <input value = "<?php echo $password ?>"  type="text" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter address">
        </div> -->
        <div type="" name="btn"  class="btn btn-primary submitUpdateGuest">Submit</div>
    </form>  
</div>

<script src="/PHP/KHACHSAN/public/js/form.js"></script>