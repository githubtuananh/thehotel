<?php 
    session_start();
    class Guest extends DB{
        public function getGuest(){
            $sql = 'SELECT * FROM guest';
            return mysqli_query($this->conn, $sql);
        }  
        public function getDisable($username){
            $disable = 0;
            $sql = "SELECT * FROM guest where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $disable = $row['disable'];
                }
                return $disable;
            }
        }
        public function checkUser($user, $pass){
            if(empty($user) || empty($pass)){
                return 'Vui lòng điền đầy đủ';
            }
            $sql = "SELECT * FROM guest where username = '$user'";
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)==0){
               return '<p class="mes">Tên đăng nhập không tồn tại</p>';
            }
            else{
                $row = mysqli_fetch_array($result);
                if(!password_verify($pass,$row['PASSWORD'])){
                    return '<p class="mes">Mật khẩu không chính xác</p>';
                }
            }
            if($this->getDisable($user)==1){
                return '<p class="mes">Tài khoản của bạn đã bị khóa</p>';
            }
            //*****
            $_SESSION['user'] = $user;
            //*****
            header('location: ./show');
            return 'Đăng nhập thành công';
        }
        public function insertGuest($idRoom,$name,$username,$password){
            $kq=false;
            $sql = "INSERT INTO guest VALUES('$idRoom','$name','$username','$password','0')";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function register($name,$username,$password){
            $kq=false;
            $sql = "INSERT INTO guest VALUES(null,'$name','$username','$password',0)";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function checkRegister($username){
            $sql = "SELECT * FROM guest WHERE username = '$username'" ;
            $rows = mysqli_query($this->conn,$sql);
            $kq='Hợp lệ nhé';
            if(mysqli_num_rows($rows)>0){
                $kq='Tên đăng nhập này đã tồn tại';
            }
            return json_encode($kq);
        }
        public function editGuest($username){
            $sql = "SELECT * FROM guest where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn, $sql);
            }
            else{
                return false;
            }
        }
        public function updateGuest($idRoom,$name,$username){
            $kq=false;
            $sql = "UPDATE guest SET idRoom = '$idRoom', name = '$name', username = '$username' WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function welcom($username){
            $sql = "SELECT * FROM guest where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn, $sql);
            }
            else{
                return false;
            }
        }
        public function delGuest($username){
            $kq=false;
            $sql = "DELETE FROM guest WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function disableGuest($username){
            $kq=false;
            $sql = "UPDATE guest SET  disable = 1 WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function updateIdRoom($username,$idRoom){
            $kq=false;
            $sql = "UPDATE guest SET  idRoom = '$idRoom' WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function activeGuest($username){
            $kq=false;
            $sql = "UPDATE guest SET  disable = 0 WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function searchGuest($name){
            $sql = "SELECT * FROM guest WHERE name LIKE '$name%'";
            if(mysqli_query($this->conn,$sql)){
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) == 0){
                    return 'No result';
                }
                return $result;
            }
        }
        public function updatePassword($username,$newpassword){
            $newpassword = password_hash($newpassword,PASSWORD_DEFAULT);
            $kq=false;
            $sql = "UPDATE guest SET  password = '$newpassword' WHERE username ='$username'";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }
        public function changePassword($username,$oldpassword,$newpassword,$rePassword){
            $sql = "SELECT * FROM guest where username = '$username'";
            $result = mysqli_query($this->conn,$sql);

            $row = mysqli_fetch_array($result);
            if(!password_verify($oldpassword,$row['PASSWORD'])){
                return 'Mật khẩu cũ không đúng';
            }
            else{
                if($newpassword!=$rePassword){
                    return 'Mật khẩu nhập lại không trùng khớp';
                }
                else{
                    $this->updatePassword($username,$newpassword);
                    //*****
                    unset($_SESSION['user']);
                    //*****
                    header('location: ./show');
                }
            }
        }

    }
?>