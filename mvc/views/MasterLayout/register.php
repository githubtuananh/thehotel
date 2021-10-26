
<!-- <form action="/PHP/KHACHSAN/home/register" method="post">
    <div class="form-group">
        <label for="name">NAME</label>
        <input value = "" type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="username">
    </div>
    <div class="form-group">
        <label for="username">USERNAME</label>
        <input value = "" type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="username">
        <div id="mess"></div>
    </div>
    <div class="form-group">
        <label for="password">PASSWORD</label>
        <input value = ""  type="text" class="form-control" name="password" aria-describedby="emailHelp" placeholder="password" >
    </div>
    <div class="form-group">
        <label for="password">REPASSWORD</label>
        <input value = ""  type="text" class="form-control" name="repassword" aria-describedby="emailHelp" placeholder="password" >
    </div>

    <button type="submit" name="btn"  class="btn btn-primary">Submit</button>
</form>   -->

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/loginUser.css">
	
	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color:#f36b21"	class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                <form action="/PHP/KHACHSAN/home/register" method="post" class="signin-form">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Họ tên" required>
                </div>
	            <div class="form-group">
	              <input id="password-field" name="username" type="text" class="form-control" placeholder="Tên đăng nhập" required>
                  <div class="mes" id="mess"></div>
                </div>
                <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Mật khẩu" required>
	            </div>
                <div class="form-group">
	              <input id="password-field" name="repassword" type="password" class="form-control" placeholder="Nhập lại mật khẩu" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="btn" class="form-control btn btn-primary submit px-3">Submit</button>
	            </div>
                <div class="form-group">
	            	<p class="mes">
                        <?php
                            if(!empty($data['kq'])){                               
                                if($data['kq'] == 'false'){
                                    echo 'Đăng ký thất bại !';
                                }
                                else{
                                    echo $data['kq'];
                                }
                            }
                        ?>
                    </p>
	            </div>
	          </form>
              
		      </div>
			</div>
			</div>
		</div>
	</section>
	</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script src="/PHP/KHACHSAN/public/js/register.js"></script>

<!-- <script>

$(document).ready(()=>{
    $('input[name="username"]').keyup(function(){
        var username = $(this).val()
        $.post('/PHP/KHACHSAN/Ajax/checkUser',{user:username},function(data){
            $('#mess').html(data)
        })
    }) 
    var password = $('input[name="password"]').val()

    $('input').keyup(function(){
        $('.mes').html('')
    }) 
})
</script> -->

