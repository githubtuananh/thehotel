<?php 
    class Room extends DB{
        public function getRoom(){
            $sql = 'SELECT * FROM room';
            return mysqli_query($this->conn, $sql);
        }  
        public function getOneRoom($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            return mysqli_query($this->conn, $sql);
        } 
        public function getDisable($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $disable = $row['disable'];
                }
                return $disable;
            }
        }
        public function insertRoom($idRoom,$name,$cost,$img,$soluong){
            $kq=false;
            $sql = "INSERT INTO room VALUES('$idRoom','$name','$cost','$img','$soluong','0')";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function editRoom($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn, $sql);
            }
            else{
                return false;
            }
        }
        public function updateRoom($idRoom,$name,$cost,$img,$soluong){
            $kq=false;
            $sql = "UPDATE room SET  name = '$name', cost = '$cost', img = '$img', soluong = '$soluong' WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function getNumberRoom($idRoom){
            $sql = "SELECT * FROM room where idRoom = '$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $soluong = $row['soluong'];
                }
                return $soluong;
            }
        } 
        public function updateDisable($idRoom){
            $kq="update thất bại";
            $sql = "UPDATE room SET  disable = 1 WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq='Hết phòng rồi nhé';
            }
            return json_encode($kq);
        }
        public function updateNumberRoom($idRoom){
            $kq=false;
            if($this->getNumberRoom($idRoom)==1){
                $sql = "UPDATE room SET  soluong = soluong-1 WHERE idRoom ='$idRoom'";
                if(mysqli_query($this->conn,$sql)){
                    $kq=true;
                }
                $this->updateDisable($idRoom);
            }
            if($this->getNumberRoom($idRoom)!=0){
                $sql = "UPDATE room SET  soluong = soluong-1 WHERE idRoom ='$idRoom'";
                if(mysqli_query($this->conn,$sql)){
                    $kq=true;
                }
            }
            return json_encode($kq);
        }
        public function checkDate($idRoom,$arrival,$leave){
            $kq = false;
            $order = $this->getOrder($idRoom);
            while($row = mysqli_fetch_array($order)){
                if($arrival != $row['arrival'] and $leave != $row['leave']){
                    $kq = true;
                }
                else{
                    $kq = false;
                }
            }
            return $kq;
        }
        public function getOrder($idRoom){
            $sql = "SELECT * FROM orderroom WHERE idRoom ='$idRoom'";
            return mysqli_query($this->conn, $sql);
        }

        public function delRoom($idRoom){
            $kq=false;
            $sql = "DELETE FROM room WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function disableRoom($idRoom){
            $kq=false;
            $sql = "UPDATE room SET  disable = 1 WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function activeRoom($idRoom){
            $kq=false;
            $sql = "UPDATE room SET  disable = 0 WHERE idRoom ='$idRoom'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function searchRoom($name){
            $sql = "SELECT * FROM room WHERE name LIKE '%$name%'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) == 0){
                    return '<p class="search-result">Không tìm thấy ...</p>';
                }
                return mysqli_query($this->conn, $sql);
            }
        }
        public function searchRoomCost($cost){
            $sql = "SELECT * FROM room WHERE cost > $cost AND disable != '1'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) == 0){
                    return '<h2 class="search-result">Không tìm thấy ...</h2>';
                }
                return mysqli_query($this->conn, $sql);
            }
        }
    }
?>