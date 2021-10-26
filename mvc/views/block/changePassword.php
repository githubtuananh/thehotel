
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	
	<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/changePassword.css">
	
	</head>
    
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <div id="box-message" >
        <p class="message"></p>
    </div>
        <div class='form'>
            <form action="./changePassword" method="post">
                <div class="form-group">
                    <label for="idRoom">Mật khẩu cũ</label>
                    <input type="password" name="oldPassword" class="form-control"  required>
                </div>
                <div class="form-group">
                    <label for="name">Mật khẩu mới</label>
                    <input id="password-field" name="newPassword" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="username">Nhập lại mật khẩu</label>
                    <input id="password-field" name="rePassword" type="password" class="form-control"  required>
                </div>
                <button type="submit" name="btn" class="form-control btn btn-primary submit px-3 ">Submit</button>
            </form>  
    
        </div>
        <p class="mes">
            <?php
                if(!empty($data['mes'])){
                    echo $data['mes'] ;
                }
            ?>
        <p>
	</body>
</html>
