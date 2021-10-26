<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="/PHP/KHACHSAN/public/css/loginAdmin.css">
</head>
<body>
      <div class="main">
        <form action="/PHP/KHACHSAN/admin/login" method="post" class="form" id="form-1">
          <h3 class="heading">ĐĂNG NHẬP ADMIN</h3>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="password_confirmation" class="form-label">Tài khoản</label>
            <input id="password_confirmation" name="username"  type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password"  class="form-control">
            <span class="form-message" style="color:red"></span>
            <div class="form-submit" name="btn" >Đăng ký</div>
          </div>
        </form>

      </div>

<script src="/PHP/KHACHSAN/public/js/admin.js"></script>
</body>
</html>




