<?php 
    class controllerProduct extends controller{
        public function __construct(){
            $this->modelsRoom = $this->model('Room');
            $this->modelsGuest = $this->model('Guest');
            $this->modelsOrder = $this->model('Order');
            $this->checkActive();
        }
        public function checkActive(){
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
            if($this->modelsGuest->getDisable($user)==1){
                unset($_SESSION['user']);
            }
        }
        public function show(){
            $this->views = $this->view('Product',[
                'room' =>  $this->modelsRoom->getRoom(),
                'block' => 'footer'
            ]);
        }
        public function selectRoom($idRoom){
            $this->views = $this->view('Cart',[
                'price' => $this->modelsOrder->getPrice($idRoom),
                'name' => $this->modelsOrder->getName($idRoom),
                'img' => $this->modelsOrder->getImg($idRoom),
            ]);
        }
        public function delOrder(){
            $this->views = $this->view('Cart',[
                'price' => $this->modelsOrder->getPrice($_SESSION['idRoom']),
                'name' => $this->modelsOrder->getName($_SESSION['idRoom']),
                'img' => $this->modelsOrder->getImg($_SESSION['idRoom']),
            ]);
        }
        public function book(){
            if(isset($_SESSION['user'])){
                if( $this->modelsRoom->updateNumberRoom($_SESSION['idRoom'])=='true' ){
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $sdt = isset($_POST['sdt']) ? trim($_POST['sdt']) : '';
                    $mess = isset($_POST['mess']) ? trim($_POST['mess']) : '';
                    $arrival = isset($_POST['arrival']) ? trim($_POST['arrival']) : '';
                    $leave = isset($_POST['leave']) ? trim($_POST['leave']) : '';

                    //cap nhat id phòng vào bảng guest
                    $this->modelsGuest->updateIdRoom($_SESSION['user'],$_SESSION['idRoom']);
                   //Them order vào database
                    $kq = $this->modelsOrder->insertOrder($name,$sdt,$arrival,$leave,$mess);
                    
                    echo $kq;
                }
                else{
                    echo 'Hết phòng';
                }
            }
            else{
                echo 'Vui lòng đăng nhập trước khi đặt phòng';
            }
        }
        public function myOrder(){
            if(isset($_SESSION['user'])){
            $username = $_SESSION['user'];
            $result = $this->modelsOrder->getOrderGuest($username);
                $this->views = $this->view('Account',[
                    'block' => 'myOrder',
                    'welcom' => $this->modelsGuest->welcom($_SESSION['user']),
                    'myOrder' =>$result
                ]);
            }
        }
    }
?>