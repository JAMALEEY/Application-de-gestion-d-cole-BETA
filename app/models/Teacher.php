



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
                //  the teachers insert query

    public function creatTeacher($data)
    {
        // prepare query
        $this->db->query('INSERT INTO teachers (teachername, teachergender, teacherclasse, teachermatiere, teacherphone) VALUES(:teachername, :teachergender, :teacherclasse, :teachermatiere, :teacherphone)');
        // we bind values
        $this->db->bind(':teachername' ,$data['teachername']);
        $this->db->bind(':teachergender' ,$data['teachergender']);
        $this->db->bind(':teacherclasse' ,$data['teacherclasse']);
        $this->db->bind(':teachermatiere' ,$data['teachermatiere']);
        $this->db->bind(':teacherphone' ,$data['teacherphone']);

        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}


?>