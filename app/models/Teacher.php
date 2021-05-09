
}



<?php
class Teacher
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTeachers()
    {
        $this->db->query('SELECT * FROM teachers');
        $results = $this->db->resultSet();
        return $results;
    }
}


?>