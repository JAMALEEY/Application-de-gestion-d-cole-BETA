



<?php
class Teacher
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTeacher()
    {
        $this->db->query('SELECT `id`, `teachername`, `teachergender`, `teacherclasse`, `teachermatiere`, `teacherphone` FROM `teachers`');
        $this->db->bind(':teachername', 'teachername');
        $this->db->bind(':teachergender', 'teachergender');
        $this->db->bind(':teacherclasse', 'teacherclasse');
        $this->db->bind(':teachermatiere', 'teachermatiere');
        $this->db->bind(':teacherphone', 'teacherphone');
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
        $this->db->bind(':teachername', $data['teachername']);
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


    public function updateTeacher($data)
    {
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


    public function deleteTeacher($data)
    {
        $this->db->query('DELETE FROM `teachers` WHERE id = :id');
        // bind values
        $this->db->bind(':id', $data['id']);
        // execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }





    public function search($result)
    {

        if (isset($_POST['find'])) {
            $key = $_POST['search'];
            $this->db->query("SELECT * FROM teachers WHERE teachername LIKE '%%$key%%' ");
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
            // $stmt = $this->mysqli->prepare($query);
            // $stmt->bind_param("s", "%$key%");       // insert your variable into the placeholder (still need to add % wildcards)
            // $stmt->execute();
            // return $stmt;
        }

} 
}