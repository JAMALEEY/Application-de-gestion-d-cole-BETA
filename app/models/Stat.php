<?php 
        
        class Stat {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
        

// FOR STATS




                        public function numberStudentsInClass()
                        {
                        $this->db->query("SELECT * FROM students WHERE `studentclass` = 'NAMEK' ");
                        $this->db->resultSet();
                        $class1 = $this->db->rowCount();

                        $this->db->query("SELECT * FROM students WHERE `studentclass` = 'BABYLONE'");
                        $this->db->resultSet();
                        $class2 = $this->db->rowCount();

                        $this->db->query("SELECT * FROM students WHERE `studentclass` = 'DailyCoders'");
                        $this->db->resultSet();
                        $class3 = $this->db->rowCount();

                        $studentclass = [
                        'classNAMEK' => $class1,
                        'classBABYLONE' => $class2,
                        'classDailyCoders' => $class3
                        ];
                        return $studentclass;
                        }


                        public function numberstudents()
                        {
                        // query preparation
                        $this->db->query("SELECT * FROM students");

                        // execution of query and fething data as row
                        $this->db->resultSet();
                        $result = $this->db->rowCount();
                        return $result;
                        }


                        public function numberparents()
                        {
                        // we prepare query
                        $this->db->query("SELECT * FROM theparents");

                        // fetch all (query execution)
                        $this->db->resultSet();
                        $result = $this->db->rowCount();
                        return $result;
                        }


                        public function numberteachers()
                        {
                        // query preparation
                        $this->db->query("SELECT * FROM teachers");

                        // execution of query and fething data as row
                        $this->db->resultSet();
                        $result = $this->db->rowCount();
                        return $result;
                        }

                        public function genderStudents()
                        {
                        // query preparation
                        $this->db->query("SELECT * FROM `students` WHERE studentgender = 'homme' ");

                        // execution of query and fething data as row
                        $this->db->resultSet();
                        $result = $this->db->rowCount();
                        return $result;
                        }



    public function ageStudents()
    {
        // query preparation
        $this->db->query("SELECT age FROM `students` ");

        // execution of query and fething data as row
        $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }
        }
?>