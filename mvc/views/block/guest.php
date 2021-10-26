
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<div style="margin: 20px 0;" >
    <input class="search" type="text" name="searchGuest" value="" placeholder="    name.......">
</div>
<button class="btn-add"><a class="add" href="/PHP/KHACHSAN/admin/formGuest">Thêm khách hàng</a></button>
<table class="box">
    <thead>
        <tr>
            <th>Phòng thuê</th>
            <th>Tên khách</th>
            <th>Tài khoản</th>
            <th>Trạng thái</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
            <th>Vô hiệu hóa</th>
            <th>Kích hoạt</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(!empty($data['guest'])){
            while($row = mysqli_fetch_array($data['guest'])){
                $user = $row['username'];
                echo "<tr>";
                echo "<td>".$row['idRoom']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td class='disG' id= 'disGuest$user'>".$row['disable']."</td>";
                echo "<td><button class='btn btn-edit'><b><a class='edit' href='/PHP/KHACHSAN/admin/editGuest/$user'>Edit</a></b></button></td>";
                echo "<td><button class='btn btn-del' ><b href='/PHP/KHACHSAN/admin/delGuest/$user' id='$user' class='delGuest'>Delete</b></button></td>";
                echo "<td><button class='btn btn-dis'><b href='/PHP/KHACHSAN/admin/disableGuest/$user' id='$user' class='disGuest'>Disable</b></button></td>";
                echo "<td><button class='btn btn-act'><b href='/PHP/KHACHSAN/admin/activeGuest/$user' id='$user' class='actGuest'>Active</b></button></td>";
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

<script src="/PHP/KHACHSAN/public/js/search.js"></script>
<script src="/PHP/KHACHSAN/public/js/delete_disable1.js"></script>



