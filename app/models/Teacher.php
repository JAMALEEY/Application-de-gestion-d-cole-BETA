


<?php
class Teacher
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function creatTeacher($data)
    {
        $this->db->query('INSERT INTO teachers (teachername, user_id, teachergender, teacherclasse, teachermatiere, teacherphone ) VALUES (:teachername, :user_id, :teachergender, :teacherclasse, :teachermatiere, :teacherphone)');
        // we bind values
        $this->db->bind(':teachername', $data['teachername']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':teachergender', $data['teachergender']);
        $this->db->bind(':teacherclasse', $data['teacherclasse']);
        $this->db->bind(':teachermatiere', $data['teachermatiere']);
        $this->db->bind(':teacherphone', $data['teacherphone']);
        
        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}


?>