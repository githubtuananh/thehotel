<?php 
    class Admin extends DB{    
        public function getADmin(){
            $sql = 'SELECT * FROM admin';
            return mysqli_query($this->conn, $sql);
        }    
        public function welcom($username){
            $sql = "SELECT * FROM admin where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn, $sql);
            }
            else{
                return false;
            }
        }    
        public function checkAdmin($user, $pass){
            if(empty($user) || empty($pass)){
                return 'Vui lòng điền đầy đủ';
            }
            $sql = "SELECT * FROM admin where username = '$user'";
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)==0){
                return 'Tên đăng nhập không tồn tại';
            }
            else{
                $row = mysqli_fetch_array($result);
                if(!password_verify($pass,$row['password'])){
                    return 'Mật khẩu không chính xác';
                }
            }
            $_SESSION['admin'] = $user;
            // header('location: /PHP/KHACHSAN/admin/show');
            return true;
        }

        public function insertAdmin(){
            $kq=false;
            $password = password_hash('123',PASSWORD_DEFAULT);
            $sql = "INSERT INTO admin VALUES('admin1','$password','letuananh@gmail.com','Nguyễn Yến Nhi')";
            if(mysqli_query($this->conn,$sql)){
                $kq=true;
            }
            return json_encode($kq);
        }

    }
?>