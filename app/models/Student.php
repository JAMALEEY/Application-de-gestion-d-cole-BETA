
<?php
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudent(){
        $this->db->query('SELECT `id`, `studentname`, `studentgender`, `studentclass`, `stdparents`, `studentadress`, `studentbirth`, `studentemail` FROM `students`');
        $this->db->bind(':studentname', 'studentname');
        $this->db->bind(':studentgender', 'studentgender');
        $this->db->bind(':studentclass', 'studentclass');
        $this->db->bind(':stdparents', 'stdparents');
        $this->db->bind(':studentadress', 'studentadress');
        $this->db->bind(':studentbirth', 'studentbirth');
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
        $this->db->query('INSERT INTO students (studentname, studentgender, studentclass, stdparents, studentadress, studentbirth, studentemail) VALUES(:studentname, :studentgender, :studentclass, :stdparents, :studentadress, :studentbirth, :studentemail)');
        // we bind values
        $this->db->bind(':studentname', $data['studentname']);
        $this->db->bind(':studentgender', $data['studentgender']);
        $this->db->bind(':studentclass', $data['studentclass']);
        $this->db->bind(':stdparents', $data['stdparents']);
        $this->db->bind(':studentadress', $data['studentadress']);
        $this->db->bind(':studentbirth', $data['studentbirth']);
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
        $this->db->query('UPDATE students SET studentname = :studentname, studentgender = :studentgender, studentclass = :studentclass, stdparents = :stdparents, studentadress = :studentadress, studentbirth = :studentbirth, studentemail = :studentemail WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':studentname', $data['studentname']);
        $this->db->bind(':studentgender', $data['studentgender']);
        $this->db->bind(':studentclass', $data['studentclass']);
        $this->db->bind(':stdparents', $data['stdparents']);
        $this->db->bind(':studentadress', $data['studentadress']);
        $this->db->bind(':studentbirth', $data['studentbirth']);
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
        $this->db->bind(':id', $data['id']);
        // execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}