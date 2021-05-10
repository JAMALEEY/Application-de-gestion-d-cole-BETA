



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

    public function getTeacherById($id)
    {
        $this->db->query('SELECT * FROM teachers WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }   

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


    public function updateTeachers($data){
        $this->db->query('UPDATE teachers SET teachername = :teachername, teachergender = :teachergender, teacherclasse = :teacherclasse, teachermatiere = :teachermatiere, teacherphone = :teacherphone WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':teachername', $data['teachername']);
        $this->db->bind(':teachergender', $data['teachergender']);
        $this->db->bind(':teacherclasse', $data['teacherclasse']);
        $this->db->bind(':teachermatiere', $data['teachermatiere']);
        $this->db->bind(':teacherphone', $data['teacherphone']);
        //  the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



}


?>