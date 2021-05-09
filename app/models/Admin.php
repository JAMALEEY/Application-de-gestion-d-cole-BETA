<?php
    class Admin {
        private $db;
        
        public function __construct(){
            $this->db = new Database;
        }
        
        public function checkAdmin($username){
            $this->db->query("SELECT * FROM admins WHERE username = :username");
            $this->db->bind(':username', $username);
            $num_rows = $this->db->RowCount();

            if ($num_rows >= 1) {
                return true;
            }else {
                return false;
            }
        }
        // log in the user 
        public function logIn($username, $password) {
            $this->db->query('SELECT * FROM admins WHERE username = :username');
            $this->db->bind(':username', $username);

            $row = $this->db->single();
            $hashed_password = $row->password;
            if (password_verify($password, $hashed_password)) {
                return $row;
            }else {
                return false;
            }

        }
        
    }
