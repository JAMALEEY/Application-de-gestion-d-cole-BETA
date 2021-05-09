<?php
    class Admin {
        private $db;
        
        public function __construct(){
            $this->db = new Database;
        }
        
        public function checkAdmin($email){
            $this->db->query("SELECT * FROM admins WHERE Email = :email");
            $this->db->bind(':email', $email);
            $num_rows = $this->db->RowCount();

            if ($num_rows >= 1) {
                return true;
            }else {
                return false;
            }
        }
        // log in the user 
        // go for email admin login
        public function logIn($email, $password) {
            $this->db->query('SELECT * FROM admins WHERE Email = :email AND Password = :password');
            $this->db->bind(':email', $email);
        }


    public function findAdminByEmail($email)
    {
        $this->db->query('SELECT * FROM admins WHERE Email = :email');
        //  we bind email value
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

        
    }
