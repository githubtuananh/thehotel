<?php
    class DB{
        // protected $conn;
        // protected $host = 'sql301.epizy.com';
        // protected $user = 'epiz_30178374';
        // protected $pass = '0aVIWVfLO87AP0';
        // protected $db = 'epiz_30178374_khachsan';

        protected $conn;
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'QUANLYKHACHSAN';
        function __construct(){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            mysqli_query($this->conn,'set names utf8');
        }
    }
?>