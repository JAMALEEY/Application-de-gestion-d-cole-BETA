
<?php
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudent(){
        $this->db->query('SELECT `id`, `teachername`, `teachergender`, `teacherclasse`, `teachermatiere`, `teacherphone` FROM `teachers`');
        $this->db->bind(':teachername', 'teachername');
        $this->db->bind(':teachergender', 'teachergender');
        $this->db->bind(':teacherclasse', 'teacherclasse');
        $this->db->bind(':teachermatiere', 'teachermatiere');
        $this->db->bind(':teacherphone', 'teacherphone');
        $results = $this->db->resultSet();
        return $results;
    }