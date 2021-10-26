
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

<style>
    td{
        padding:20px;
    }
</style>
<table class="box">
    <thead>
        <tr>
            <th>Mã HĐ</th>
            <th>Mã phòng</th>
            <th>Họ tên</th>
            <th>Sđt</th>
            <th>Ngày đến</th>
            <th>Ngày đi</th>
            <th>Lời nhắn</th>
            <th>Tổng giá</th>
            <th>Hủy</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(!empty($data['myOrder'])){
            while($row = mysqli_fetch_array($data['myOrder'])){
                echo "<tr>";
                $mahd = $row['MaHD'];
                echo "<td>".$row['MaHD']."</td>";
                echo "<td>".$row['idRoom']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['sdt']."</td>";
                echo "<td>".$row['arrival']."</td>";
                echo "<td>".$row['leave']."</td>";
                echo "<td>".$row['mess']."</td>";
                echo "<td>".$row['cost']."</td>";
                echo "<td class='huy' id='$mahd' style='cursor: pointer;color:red; font-size:20px;'><i class='fa fa-times' aria-hidden='true'></i></td>";
                echo "</tr>";
            }         
        }
        ?>
    </tbody>
</table>
<?php
    if(!empty($data['block'])){
        require_once("./mvc/views/block/".$data['block'].".php");
    } 
?>
<script src="/PHP/KHACHSAN/public/js/delete_disable1.js"></script>




