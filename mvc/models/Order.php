<?php 
    class Order extends DB{    
        public function getOrder(){
            $sql = 'SELECT * FROM orderroom';
            return mysqli_query($this->conn, $sql);
        }
        // public function delOrder($mahd){
        //     $kq=false;
        //     $sql = "DELETE FROM orderroom WHERE MaHD ='$mahd'";
        //     if(mysqli_query($this->conn,$sql)){
        //         $kq=true;
        //     }
        //     return json_encode($kq);
        // }   
               
        public function delOrder($mahd){
            $idRoom = $this->getIdRoomOrder($mahd);
            $this->updateNumberRoom($idRoom);
            $this->updateDisable($idRoom);
            $sql = "DELETE FROM orderroom WHERE MaHD ='$mahd'";
            mysqli_query($this->conn,$sql);
        }   
        public function updateDisable($idRoom){
            $sql = "UPDATE room SET  disable = 0 WHERE idRoom ='$idRoom'";
            mysqli_query($this->conn,$sql);
        }
        public function getIdRoomOrder($mahd){
            $sql = "SELECT * FROM orderroom where MaHD = '$mahd'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['idRoom'];
                }
                return $id;
            }
        }

        public function updateNumberRoom($idRoom){
            $sql = "UPDATE room SET  soluong = soluong+1 WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }

        public function searchOrder($mahd){
            $sql = "SELECT * FROM orderroom WHERE MaHD LIKE '$mahd%'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) == 0){
                    return 'No result';
                }
                return $result;
            }
        }
        public function autoMaHd(){
            $sql = "SELECT * FROM orderroom" ;
            $rows = mysqli_query($this->conn,$sql);
            return 'HD'.mysqli_num_rows($rows)+1;
        }
        
        public function getPrice($idRoom){
            $_SESSION['idRoom'] = $idRoom;
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $price = $row['cost'];
                }
                return $price; 
            }
        }
        public function getName($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $name = $row['name'];
                }
                return $name; 
            }
        }
        public function getImg($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $img = $row['img'];
                }
                return $img; 
            }
        }
        public function updatePrice($arrival,$leave){
            $priceDefault = $this->getPrice($_SESSION['idRoom']);
            return  $priceDefault*(strtotime($leave)-strtotime($arrival)) / (60 * 60 * 24);
        }
        public function insertOrder($name,$sdt,$arrival,$leave,$mess){
            $idRoom = $_SESSION['idRoom'];
            $username = $_SESSION['user'];
            $mahd = $this->autoMaHd();
            $cost = $this->updatePrice($arrival,$leave) + $this->updatePrice($arrival,$leave)*5/100;
            $kq=false;
            $sql = "INSERT INTO orderroom VALUES('$mahd','$idRoom','$name','$sdt','$arrival','$leave','$mess','$cost','$username')";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function getOrderGuest($username){
            $sql = "SELECT * FROM orderroom where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                return  mysqli_query($this->conn, $sql);
            }
        }
    }
?>