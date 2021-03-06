



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
        $this->db->bind(':id', $data);
        // execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }





    public function search()
    {

        if (isset($_POST['search'])) {

            $key = $_POST['search'];
            // $this->db->query("SELECT * FROM teachers LEFT JOIN students ON teachers .`id` = `teachers`.`id`WHERE teachername LIKE '$key' OR teachergender LIKE '$key' OR teacherclasse LIKE '$key' OR teachermatiere LIKE '$key' OR teacherphone LIKE '$key' OR studentname LIKE '$key' ");



            $this->db->query("SELECT * FROM teachers WHERE teachers.teachername LIKE '%$key%' OR teachers.teachergender LIKE '%$key%' OR teachers.teacherclasse LIKE '%$key%' OR teachers.teachermatiere LIKE '%$key%' OR teachers.teacherphone LIKE '%$key%'");


            $searchresult = $this->db->resultSet();
            return $searchresult;
        } else {
            die('Not Found');
        }


        // $stmt = $this->mysqli->prepare($query);
        // $stmt->bind_param("s", "%$key%");      
        // $stmt->execute();
        // return $stmt;
    }
}
