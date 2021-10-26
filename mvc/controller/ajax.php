<?php

class controllerAjax extends controller{

    protected $modelsGuest;
    protected $modelsRoom;

    public function __construct(){
        $this->modelsGuest = $this->model('Guest');
        $this->modelsRoom = $this->model('Room');
        $this->modelsAdmin = $this->model('Admin');
        $this->modelsOrder = $this->model('Order');
    }
    public function checkUser(){
        $username = isset($_POST["user"]) ? $_POST["user"] : '';
        if(empty($username)){
            echo 'Vui lòng không bỏ trống';
        }
        else{
            echo  json_decode( $this->modelsGuest->checkRegister($username));
        }
    }
    public function checkAdmin(){
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';
        echo  $this->modelsAdmin->checkAdmin($username,$password);
    }
    public function searchGuest(){
        $name = isset($_POST["data"]) ? $_POST["data"] : '';
        $guest = $this->modelsGuest->searchGuest($name);
        if(is_string($guest)==1){
            echo $guest;
        } 
        else{
            while($row = mysqli_fetch_array($guest)){
                $user = $row['username'];
                echo "<tr>";
                echo "<td>".$row['idRoom']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                if($row['disable']==1){
                    echo "<td class='disG' id= 'disGuest$user'>".'<i class="fa fa-user-times" aria-hidden="true"></i>'."</td>";
                }else{
                    echo "<td class='disG' id= 'disGuest$user'>".'<i class="fa fa-user" aria-hidden="true"></i>'."</td>";
                }
                echo "<td><button class='btn btn-edit'><b><a class='edit' href='/PHP/KHACHSAN/admin/editGuest/$user'>Edit</a></b></button></td>";
                echo "<td><button class='btn btn-del' ><b href='/PHP/KHACHSAN/admin/delGuest/$user' id='$user' class='delGuest'>Delete</b></button></td>";
                echo "<td><button class='btn btn-dis'><b href='/PHP/KHACHSAN/admin/disableGuest/$user' id='$user' class='disGuest'>Disable</b></button></td>";
                echo "<td><button class='btn btn-act'><b href='/PHP/KHACHSAN/admin/activeGuest/$user' id='$user' class='actGuest'>Active</b></button></td>";
                echo "</tr>";
            } 
        }
    }
    public function searchRoom(){
        $name = isset($_POST["data"]) ? $_POST["data"] : '';
        $room = $this->modelsRoom->searchRoom($name);
        if(is_string($room)==1){
            echo $room;
        } 
        else{
            while($row = mysqli_fetch_array($room)){
                $id = $row['idRoom'];
                echo "<tr>";
                echo "<td>".$row['idRoom']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['cost']."</td>";
                echo "<td>".$row['soluong']."</td>";
                if($row['disable']==1){
                    echo "<td class='disR' id='disRoom$id'>".'<i class="fa fa-times-circle-o" aria-hidden="true"></i>'."</td>";
                }else{
                    echo "<td class='disR' id='disRoom$id'>".'<i class="fa fa-check-circle-o" aria-hidden="true"></i>'."</td>";
                }
                echo "<td><button class='btn btn-edit'><b><a  class='edit' href='/PHP/KHACHSAN/admin/editRoom/$id'>Edit</a></b></button></td>";
                echo "<td><button class='btn btn-del'><b href='/PHP/KHACHSAN/admin/delRoom/$id' id='$id' class='delRoom'>Delete</b></button></td>";
                echo "<td><button class='btn btn-dis'><b href='/PHP/KHACHSAN/admin/disableRoom/$id' id='$id' class='disRoom'>Disable</b></button></td>";
                echo "<td><button class='btn btn-act'><b href='/PHP/KHACHSAN/admin/activeRoom/$id' id='$id' class='actRoom'>Active</b></button></td>";
                echo "</tr>";
            } 
        }
    }

    public function searchOrder(){
        $mahd = isset($_POST["data"]) ? $_POST["data"] : '';
        $order = $this->modelsOrder->searchOrder($mahd);
        if(is_string($order)==1){
            echo $order;
        } 
        else{
            while($row = mysqli_fetch_array($order)){
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
    }


    public function guestSearchRoom(){
        $name = isset($_POST["name"]) ? $_POST["name"] : '';
        
        $room = $this->modelsRoom->searchRoom($name);
        if(is_string($room)==1){
            echo $room;
        } 
        else{
            while($row = mysqli_fetch_array($room)){
                $id = $row['idRoom'];
                if($this->modelsRoom->getDisable($id)==0){     
                echo   '<div class="box-room">';
                echo   '<img class="img-room" src=" '.$row['img'].'" alt="">';
                echo   '<div class="info-room">';
                echo   ' <div class="room">';
                echo   '<p class="name-room"> '.$row['name'].'</p>';
                echo   '<span>Với diện tích 30m2, phòng Deluxe mang đến không gian.....</span>';
                echo   '</div>';
                echo   '<div class="book-room">';
                echo   '<p class="cost-room"><span> Giá niêm yết</span> <i class="cost">'.$row['cost'] .'</i></p>';
                echo   '<a class="btn-book" href="/PHP/KHACHSAN/Product/selectRoom/'. $row['idRoom'].'">Đặt phòng ngay</a>';
                echo   '</div>';
                echo   '</div>';
                echo   '</div>';                   
                }
            } 
        }
    }

    public function guestSearchRoomCost(){
        $cost = isset($_POST["cost"]) ? $_POST["cost"] : '';

        $room = $this->modelsRoom->searchRoomCost($cost);
        if(is_string($room)==1){
            echo $room;
        } 
        else{
            while($row = mysqli_fetch_array($room)){
                $id = $row['idRoom'];
                if($this->modelsRoom->getDisable($id)==0){     
                echo   '<div class="box-room">';
                echo   '<img class="img-room" src=" '.$row['img'].'" alt="">';
                echo   '<div class="info-room">';
                echo   ' <div class="room">';
                echo   '<p class="name-room"> '.$row['name'].'</p>';
                echo   '<span>Với diện tích 30m2, phòng Deluxe mang đến không gian.....</span>';
                echo   '</div>';
                echo    '<div class="book-room">';
                echo    '<p class="cost-room"><span> Giá niêm yết</span> <i class="cost">'.$row['cost'] .'</i></p>';
                echo    '<a class="btn-book" href="/PHP/KHACHSAN/Product/selectRoom/'. $row['idRoom'].'">Đặt phòng ngay</a>';
                echo    '</div>';
                echo    '</div>';
                echo    '</div>';                   
                }
            } 
        }
    }

    public function submitdate(){
        $arrival = isset($_POST["arrival"]) ? $_POST["arrival"] : '';
        $leave = isset($_POST["leave"]) ? $_POST["leave"] : '';
        echo '<p class="price">VND '.$this->modelsOrder->updatePrice($arrival,$leave). '</p>';
        echo '<p class="number-date">Giá cho '.(strtotime($leave)-strtotime($arrival)) / (60 * 60 * 24).' đêm </p>';
    }

    public function loadOrderBox(){
        $arrival = isset($_POST["arrival"]) ? $_POST["arrival"] : '';
        $leave = isset($_POST["leave"]) ? $_POST["leave"] : '';
        $room = $this->modelsRoom->getOneRoom($_SESSION['idRoom']);
        while($row = mysqli_fetch_array($room)){
            $price = $this->modelsOrder->updatePrice($arrival,$leave);
            echo '<div class="detail-order">';
            echo '<div class="detail1">';
            echo '<p  style="margin-bottom:45px;font-size:25px; font-weight:bold">VND '.$price.' <span style="font-size:15px">total</span></p>';
            echo '<div  style="display:flex; justify-content:space-between;font-size:16px; color:#333333; ">';
            echo ' <p>'.$arrival.' đến '.$leave.'</p>';
            echo ' <p> '.(strtotime($leave)-strtotime($arrival)) / (60 * 60 * 24).' đêm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="detail2">';
            echo '<p style="justify-content:space-between;display:flex;margin-bottom:28px;font-size:16px; font-weight:bold">'.$row['name'].'<a style="color:red" href="/PHP/KHACHSAN/Product/delOrder"><i style="cursor:pointer;" class="fa fa-trash-o" aria-hidden="true"></i></a></p>';
            echo '<div style="display:flex; justify-content:space-between;">';
            echo '<span style="font-size:14px">Miễn phí hủy phòng</span>';
            echo ' <span style="font-size:16px">VND '.$price.'</span>';
            echo '</div>';
            echo '</div>';
            echo '<div class="total">';
            echo '<p>Tổng cộng</p>';
            echo '<p>VND '.$price + $price *5/100 .'</p>';
            echo '</div>';
            echo '<div class="vat">';
            echo '<p>VAT 5%</p>';
            echo '<p>VND '.$price *5/100 .'</p>';
            echo '</div>';
            echo '</div>';
        } 
    }

}
?>
        