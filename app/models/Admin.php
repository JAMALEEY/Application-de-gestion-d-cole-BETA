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
    // log in the admin 
    // go for email admin login
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM admins WHERE email = :email AND Password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $row = $this->db->single();
        return $row;
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
















// FOR STATS




    public function numberStudentsInClass()
    {
        $this->database->query("SELECT * FROM students WHERE `studentclass` = 'NAMEK' ");
        $this->database->resultSet();
        $class1 = $this->database->rowCount();

        $this->database->query("SELECT * FROM students WHERE `studentclass` = 'BABYLONE'");
        $this->database->resultSet();
        $class2 = $this->database->rowCount();

        $this->database->query("SELECT * FROM students WHERE `studentclass` = 'NAMELESS'");
        $this->database->resultSet();
        $class3 = $this->database->rowCount();

        $studentclass = [
            'classNAMEK' => $class1,
            'classBABYLONE' => $class2,
            'classNAMELESS' => $class3
        ];
        return $studentclass;
    }


    public function numberstudents()
    {
        // query preparation  
        $this->database->query("SELECT * FROM students");

        // execution of query and fething data as row
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }
    public function numberparents()
    {
        // we prepare query 
        $this->database->query("SELECT * FROM theparents");

        // fetch all (query execution)
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }
    public function numberteachers()
    {
        // query preparation 
        $this->database->query("SELECT * FROM teachers");

        // execution of query and fething data as row
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }

    public function genderStudents()
    {
        // query preparation 
        $this->database->query("SELECT * FROM `students` WHERE `studentgender` = 'Homme' ");

        // execution of query and fething data as row
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }





    
    }
