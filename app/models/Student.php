
<?php
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudent(){
        $this->db->query('SELECT `id`, `studentname`, `studentgender`, `studentclass`, `parents`, `studentadress`, `studentbirth`, `studentemail` FROM `students`');
        $this->db->bind(':studentname', 'studentname');
        $this->db->bind(':studentgender', 'studentgender');
        $this->db->bind(':studentclass', 'studentclass');
        $this->db->bind(':parents', 'parents');
        $this->db->bind(':studentadress', 'studentadress');
        $this->db->bind(':studentbirth', 'studentbirth');
        $this->db->bind(':studentemail', 'studentemail');
        $results = $this->db->resultSet();
        return $results;
    }
}