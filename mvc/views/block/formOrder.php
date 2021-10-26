
<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/form.css">
<div id="box-message" >
    <p class="message"></p>
</div>

<h2>Thêm đơn hàng</h2>
<div class='form'>
    <form action="./insertOrder" method="post">
        <div class="form-group">
            <label for="idRoom">Mã phòng</label>
            <input value = "" type="text" class="form-control" name="idRoom" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="name">Tên</label>
            <input value = ""  type="text" class="form-control" name="name" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="username">Số điện thoại</label>
            <input value = ""  type="text" class="form-control" name="sdt" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Ngày đến</label>
            <input value = ""  type="text" class="form-control" name="arrival" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="password">Ngày đi</label>
            <input value = ""  type="text" class="form-control" name="leave" aria-describedby="emailHelp" >
        </div>
        <button type="" name="btn"  class="btn btn-primary">Submit</button>
    </form>  
</div>

<script src="/PHP/KHACHSAN/public/js/form.js"></script>

