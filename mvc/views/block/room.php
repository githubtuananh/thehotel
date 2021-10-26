
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<div style="margin: 20px 0;" >
    <input class="search" type="text" name="searchRoom" value="" placeholder="   name.......">
</div>
<button class="btn-add"> <a class="add" href="/PHP/KHACHSAN/admin/formRoom">Thêm phòng</a></button>
<table class="box">
    <thead>
        <tr>
            <th>idRoom</th>
            <th>Tên phòng</th>
            <th>Giá</th>
            <th>Số phòng</th>
            <th>Trạng thái</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
            <th>Vô hiệu hóa</th>
            <th>Kích hoạt</th>
        </tr>
    </thead>
    <tbody>
<?php 
        if(!empty($data['room'])){
            while($row = mysqli_fetch_array($data['room'])){
                $id = $row['idRoom'];
                echo "<tr>";
                echo "<td>".$row['idRoom']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['cost']."</td>";
                echo "<td>".$row['soluong']."</td>";
                echo "<td class='disR' id= 'disRoom$id'>".$row['disable']."</td>";
                echo "<td><button class='btn btn-edit'><b><a  class='edit' href='/PHP/KHACHSAN/admin/editRoom/$id'>Edit</a></b></button></td>";
                echo "<td><button class='btn btn-del'><b href='/PHP/KHACHSAN/admin/delRoom/$id' id='$id' class='delRoom'>Delete</b></button></td>";
                echo "<td><button class='btn btn-dis'><b href='/PHP/KHACHSAN/admin/disableRoom/$id' id='$id' class='disRoom'>Disable</b></button></td>";
                echo "<td><button class='btn btn-act'><b href='/PHP/KHACHSAN/admin/activeRoom/$id' id='$id' class='actRoom'>Active</b></button></td>";
                echo "</tr>";
           } 
       }
?>
</table>

<?php
    if(!empty($data['block'])){
        require_once("./mvc/views/block/".$data['block'].".php");
    } 
?>
<script src="/PHP/KHACHSAN/public/js/search.js"></script>
<script src="/PHP/KHACHSAN/public/js/delete_disable1.js"></script>

