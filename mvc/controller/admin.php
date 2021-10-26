<?php 
    class controllerAdmin extends controller{
        protected $modelsAdmin;
        protected $modelsGuest;
        protected $modelsRoom;
        protected $modelsOrder;
        protected $views;
        
        public function __construct(){
            $this->modelsAdmin = $this->model('admin');
            $this->modelsGuest = $this->model('Guest');
            $this->modelsRoom = $this->model('Room');
            $this->modelsOrder = $this->model('Order');
        }

        public function show(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin'])
                ]);
            }
            else{
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }
        public function login(){
            if(isset($_POST['btn'])){
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                //del
                echo $this->modelsAdmin->checkAdmin($username,$password);
            }
        }
        public function insertAdmin(){
            echo $this->modelsAdmin->insertAdmin();
        }
        public function logout(){
            unset($_SESSION['admin']);
            $this->views = $this->view('loginAdmin',[
            ]);
        }


        //MANAGEMENT
        public function manageOrder(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'order',
                    'order' =>  $this->modelsOrder->getOrder()
                ]);
            }
        }
        public function manageRoom(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'room',
                    'room' =>  $this->modelsRoom->getRoom()
                ]);
            }
        }
        public function manageGuest(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'guest',
                    'guest' =>  $this->modelsGuest->getGuest()
                ]);
            }
        }
        public function formRoom(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'formInsertRoom',
                    'room' =>  $this->modelsRoom->getRoom()
                ]);
            }
            else{
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }
        public function formGuest(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'formInsertGuest',
                    'guest' =>  $this->modelsGuest->getGuest()
                ]);
            }
            else{
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }
        public function formOrder(){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'formOrder',
                    'order' =>  $this->modelsOrder->getOrder()
                ]);
            }
            else{
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }
        public function insertGuest(){
            if(isset($_SESSION['admin'])){
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? password_hash($_POST['password'],PASSWORD_DEFAULT) : '';
                    $idRoom = isset($_POST['idRoom']) ? trim($_POST['idRoom']) : '';
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    //del
                    echo $this->modelsGuest->insertGuest($idRoom,$name,$username,$password);
                }
            else{
                //del
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }

        public function insertRoom(){
            if(isset($_SESSION['admin'])){
                // if(isset($_POST['btn'])){
                    $idRoom = isset($_POST['idRoom']) ? trim($_POST['idRoom']) : '';
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $cost = isset($_POST['cost']) ? trim($_POST['cost']) : '';
                    $img = isset($_POST['linkImg']) ? trim($_POST['linkImg']) : '';
                    $soluong = isset($_POST['soluong']) ? trim($_POST['soluong']) : '';
                    //del
                    echo $this->modelsRoom->insertRoom($idRoom,$name,$cost,$img,$soluong);
                // }
            }
            else{
                //del
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }
        public function insertOrder(){
            if(isset($_SESSION['admin'])){
                // if(isset($_POST['btn'])){
                    $idRoom = isset($_POST['idRoom']) ? trim($_POST['idRoom']) : '';
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $sdt = isset($_POST['sdt']) ? trim($_POST['sdt']) : '';
                    $arrival = isset($_POST['arrival']) ? trim($_POST['arrival']) : '';
                    $leave = isset($_POST['leave']) ? trim($_POST['leave']) : '';
                    //del
                    // echo $mahd.$idRoom.$name.$sdt.$cost.$arrival.$leave;
                    echo $this->modelsOrder->insertOrder($idRoom,$name,$sdt,$arrival,$leave);
                // }
            }
            else{
                //del
                $this->views = $this->view('loginAdmin',[
                ]);
            }
        }

        public function editRoom($idRoom){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'formUpdateRoom',
                    'room' =>  $this->modelsRoom->editRoom($idRoom)
                ]);
            }
        }
        public function editGuest($username){
            if(isset($_SESSION['admin'])){
                $this->views = $this->view('HomeAdmin',[
                    'welcom' => $this->modelsAdmin->welcom($_SESSION['admin']),
                    'block' =>  'formUpdateGuest',
                    'guest' =>  $this->modelsGuest->editGuest($username)
                ]);
            }
        }
        public function updateRoom(){
            if(isset($_SESSION['admin'])){
                // if(isset($_POST['btn'])){
                    $idRoom = isset($_POST['idRoom']) ? trim($_POST['idRoom']) : '';
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $cost = isset($_POST['cost']) ? trim($_POST['cost']) : '';
                    $img = isset($_POST['linkImg']) ? trim($_POST['linkImg']) : '';
                    $soluong = isset($_POST['soluong']) ? trim($_POST['soluong']) : '';
                    //del
                    echo $this->modelsRoom->updateRoom($idRoom,$name,$cost,$img,$soluong);
                // }
            }
        }
        public function updateGuest(){
            if(isset($_SESSION['admin'])){
                // if(isset($_POST['btn'])){
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    // $password = isset($_POST['password']) ? password_hash($_POST['password'],PASSWORD_DEFAULT) : '';
                    $idRoom = isset($_POST['idRoom']) ? trim($_POST['idRoom']) : '';
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    //del
                    echo $this->modelsGuest->updateGuest($idRoom,$name,$username);
                // }
            }
        }
        public function delRoom($idRoom){
            if(isset($_SESSION['admin'])){
                $this->modelsRoom->delRoom($idRoom);
            }
        }
        public function delGuest($username){
            if(isset($_SESSION['admin'])){
                echo $this->modelsGuest->delGuest($username);        
            }
        }
        public function delOrder($mahd){
            if(isset($_SESSION['user'])){
                echo $this->modelsOrder->delOrder($mahd);        
            }
        }
        public function disableGuest($username){
            echo $this->modelsGuest->disableGuest($username);        
        }  
        public function activeGuest($username){
            echo $this->modelsGuest->activeGuest($username);        
        }  
        public function disableRoom($idRoom){
            echo $this->modelsRoom->disableRoom($idRoom);        
        }  
        public function activeRoom($idRoom){
            echo $this->modelsRoom->activeRoom($idRoom);        
        }  
        public function test(){
            echo $this->modelsOrder->autoMaHd();     
        }

    }
?>
