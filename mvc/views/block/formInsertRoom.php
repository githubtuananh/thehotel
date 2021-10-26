<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/form.css">
<div class="box-message">
    <p class="message"></p>
</div>
<h2>Thêm phòng vào hệ thống</h2>
<div class='form'>
    <form action="./insertRoom" method="post">
        <div class="form-group">
            <label for="idRoom">ID ROOM</label>
            <input value = "" type="text" class="form-control" name="idRoom" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="name">Tên phòng</label>
            <input value = ""  type="text" class="form-control" name="name" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="cost">Giá phòng</label>
            <input value = ""  type="text" class="form-control" name="cost" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="img">Link ảnh</label>
            <input value = ""  type="text" class="form-control" name="img" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng phòng</label>
            <input value = ""  type="text" class="form-control" name="soluong" aria-describedby="emailHelp" >
        </div>
        <div type="" name="btn"  class="btn btn-primary submitInsertRoom">Submit</div>
    </form>  
</div>


<script src="/PHP/KHACHSAN/public/js/form.js"></script>