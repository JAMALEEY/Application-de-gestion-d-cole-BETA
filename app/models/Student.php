
<?php
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudent(){
        $this->db->query('SELECT `id`, `studentname`, `studentgender`, `studentclass`, `stdparents`, `studentadress`, `age`, `studentemail` FROM `students`');
        $this->db->bind(':studentname', 'studentname');
        $this->db->bind(':studentgender', 'studentgender');
        $this->db->bind(':studentclass', 'studentclass');
        $this->db->bind(':stdparents', 'stdparents');
        $this->db->bind(':studentadress', 'studentadress');
        $this->db->bind(':age', 'age');
        $this->db->bind(':studentemail', 'studentemail');
        $results = $this->db->resultSet();
        return $results;
    }

    //  the teachers insert query

    public function getStudentById($id)
    {
        $this->db->query('SELECT * FROM students WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function creatStudent($data)
    {
        // prepare query
        $this->db->query('INSERT INTO students (studentname, studentgender, studentclass, stdparents, studentadress, age, studentemail) VALUES(:studentname, :studentgender, :studentclass, :stdparents, :studentadress, :age, :studentemail)');
        // we bind values
        $this->db->bind(':studentname', $data['studentname']);
        $this->db->bind(':studentgender', $data['studentgender']);
        $this->db->bind(':studentclass', $data['studentclass']);
        $this->db->bind(':stdparents', $data['stdparents']);
        $this->db->bind(':studentadress', $data['studentadress']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':studentemail', $data['studentemail']);

        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateStudent($data)
    {
        $this->db->query('UPDATE students SET studentname = :studentname, studentgender = :studentgender, studentclass = :studentclass, stdparents = :stdparents, studentadress = :studentadress, age = :age, studentemail = :studentemail WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':studentname', $data['studentname']);
        $this->db->bind(':studentgender', $data['studentgender']);
        $this->db->bind(':studentclass', $data['studentclass']);
        $this->db->bind(':stdparents', $data['stdparents']);
        $this->db->bind(':studentadress', $data['studentadress']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':studentemail', $data['studentemail']);
        //  the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deleteStudent($data)
    {
        $this->db->query('DELETE FROM `students` WHERE id = :id');
        // bind values
        // $this->db->bind(':id', $data['id']); we dont use that because of the modal
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

            $this->db->query("SELECT * FROM students WHERE students.studentname LIKE '%$key%' OR students.studentgender LIKE '%$key%' OR students.studentclass LIKE '%$key%' OR students.stdparents LIKE '%$key%' OR students.studentadress LIKE '%$key%' OR students.age LIKE '%$key%' OR students.studentemail LIKE '%$key%'");

            $searchresult = $this->db->resultSet();
            return $searchresult;
        } else {
            die('Not Found');
        }




}
}