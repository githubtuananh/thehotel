<?php
        if(!empty($data['room'])){
            while($row = mysqli_fetch_array($data['room'])){
                $idRoom = $row['idRoom'];
                $name  = $row['name'];
                $cost = $row['cost'];
                $img = $row['img'];
                $soluong = $row['soluong'];
           } 
       }
?>
<link rel="stylesheet" href="/PHP/KHACHSAN/public/css/form.css">
<div id="box-message" >
    <p class="message"></p>
</div>
<h2>Chỉnh sửa thông tin phòng</h2>
<div class='form'>
    <form action="../updateRoom" method="post">
        <div class="form-group">
            <label for="idRoom"><b>Id phòng</b></label>
            <input disabled value = "<?php echo $idRoom  ?>" type="text" class="form-control" name="idRoom" aria-describedby="emailHelp" placeholder="Enter id">
        </div>
        <div class="form-group">
            <label for="name"><b>Tên phòng</b></label>
            <input value = "<?php echo $name  ?>"  type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" >
        </div>
        <div class="form-group">
            <label for="cost"><b>Giá phòng</b></label>
            <input value = "<?php echo $cost  ?>"  type="text" class="form-control" name="cost" aria-describedby="emailHelp" placeholder="Enter age" >
        </div>
        <div class="form-group">
            <label for="img"><b>Link ảnh</b></label>
            <input value = "<?php echo $img  ?>"  type="text" class="form-control" name="img" aria-describedby="emailHelp" placeholder="Enter address">
        </div>
        <div class="form-group">
            <label for="soluong"><b>Số lượng phòng</b></label>
            <input value = "<?php echo $soluong  ?>"  type="text" class="form-control" name="soluong" aria-describedby="emailHelp" placeholder="Enter address">
        </div>
        <div type="" name="btn"  class="btn btn-primary submitUpdateRoom">Submit</div>

    </form>  
</div>

<script src="/PHP/KHACHSAN/public/js/form.js"></script>