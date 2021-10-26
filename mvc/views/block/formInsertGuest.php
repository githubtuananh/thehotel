
<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/form.css">
<div id="box-message" >
    <p class="message"></p>
</div>

<h2>Thêm khách hàng vào hệ thống</h2>
<div class='form'>
    <form action="./insertGuest" method="post">
        <div class="form-group">
            <label for="idRoom">ID ROOM</label>
            <input value = "" type="text" class="form-control" name="idRoom" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="name">Tên</label>
            <input value = ""  type="text" class="form-control" name="name" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="username">Tài khoản</label>
            <input value = ""  type="text" class="form-control" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input value = ""  type="text" class="form-control" name="password" aria-describedby="emailHelp" >
        </div>
        <div type="" name="btn"  class="btn btn-primary submitInsertGuest">Submit</div>
    </form>  
</div>

<script src="/PHP/KHACHSAN/public/js/form.js"></script>

