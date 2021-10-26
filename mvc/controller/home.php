<?php 
    class controllerHome extends controller{
        protected $modelsGuest;
        protected $views;
        public function __construct(){
            $this->modelsGuest = $this->model('Guest');
            $this->checkActive();
        }
        public function checkActive(){
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
            if($this->modelsGuest->getDisable($user)==1){
                unset($_SESSION['user']);
                $this->views = $this->view('Home',[
                    'block' =>  'loginUser',    
                ]);
            }
        }
        public function show(){
            if(isset($_SESSION['user'])){
                $this->views = $this->view('Home',[
                    'welcom' => $this->modelsGuest->welcom($_SESSION['user']),
                    'block' => 'footer'
                ]);
            }
            else{
                $this->views = $this->view('Home',[
                    'block' => 'footer'
                ]);
            }
        }

        public function login(){
            $this->views = $this->view('loginUser',[
            ]);
            if(isset($_POST['btn'])){
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                echo $this->modelsGuest->checkUser($username,$password);
            }
        }

        public function register(){
            $kq = '';
            if(isset($_POST['btn'])){
                $name = $_POST['name'] ? trim($_POST['name']) : '';;
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password =  isset($_POST['password']) ? trim($_POST['password']) : '';
                $repassword = isset($_POST['repassword']) ? trim($_POST['repassword']) : '';
                if($password!=$repassword){
                    $this->views = $this->view('register',[
                        'kq' => 'Mật khẩu nhập lại không chính xác'
                    ]);
                }
                else{
                    $password = isset($_POST['password']) ? password_hash($_POST['password'],PASSWORD_DEFAULT) : '';
                    $kq =  $this->modelsGuest->register($name,$username,$password);
                }

                if($kq=='true'){
                    header('location: ./show');
                }
            }
            
            $this->views = $this->view('register',[
                'kq' => $kq
            ]);
        }

        public function logout(){
            unset($_SESSION['user']);
            header('location: ./show');
        }

        public function account(){
            if(isset($_SESSION['user'])){
                $this->views = $this->view('Account',[
                'welcom' => $this->modelsGuest->welcom($_SESSION['user'])
                ]);
            }
            else{
                $this->views = $this->view('Home',[
                    header('location: /PHP/KHACHSAN/home/login')
                 ]);
            }
        }
        public function handlePassword(){
            if(isset($_SESSION['user'])){
                $this->views = $this->view('Account',[
                    'block' => 'changePassword',
                    'welcom' => $this->modelsGuest->welcom($_SESSION['user'])
                ]);
            }
            else{
                $this->views = $this->view('Home',[
                ]);
            }
        }
        public function changePassword(){
            if(isset($_POST['btn'])){
                $username = isset($_SESSION['user']) ? $_SESSION['user'] : '';
                $oldPassword = isset($_POST['oldPassword']) ? trim($_POST['oldPassword']) : '';
                $newPassword = isset($_POST['newPassword']) ? trim($_POST['newPassword']) : '';
                $rePassword = isset($_POST['rePassword']) ? trim($_POST['rePassword']) : '';
                $mes = $this->modelsGuest->changePassword($username,$oldPassword, $newPassword, $rePassword);
            }        
            $this->views = $this->view('Account',[
                'block' => 'changePassword',
                'welcom' => $this->modelsGuest->welcom($_SESSION['user']),
                'mes' => $mes
            ]);
        }
    }
?>