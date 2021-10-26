<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .welcom-admin{
            display:flex;
            justify-content:space-around;
        }
    </style>
</head>
<body>
    <div class="welcom-admin">
    <h2 class="Hello-Admin">TRANG QUẢN LÝ WEBSITE</h2>
    <h5 class="Hello-Admin" style="color:black;">
        <?php 
        if(!empty($data['welcom'])){
            $row = mysqli_fetch_array($data['welcom']);
            $username = $row['name'];
            echo "<span style='font-size:14px;'>Admin</span>  ". '<span style="font-size:20px;">'.$username.'<span>' ;
        }
        ?>
        <i style="font-size:20px; color:black;" class="fa fa-user-secret" aria-hidden="true"></i>
    </h5>
    </div>
</body>
</html>