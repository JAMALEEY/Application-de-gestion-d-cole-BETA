
<?php
class parent
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getparent()
    {
        $this->db->query('SELECT `id`, `parentname`, `parentgender`, `parentclass`, `parents`, `parentadress`, `parentbirth`, `parentemail` FROM `parents`');
        $this->db->bind(':parentname', 'parentname');
        $this->db->bind(':parentgender', 'parentgender');
        $this->db->bind(':parentclass', 'parentclass');
        $this->db->bind(':parents', 'parents');
        $this->db->bind(':parentadress', 'parentadress');
        $this->db->bind(':parentbirth', 'parentbirth');
        $this->db->bind(':parentemail', 'parentemail');
        $results = $this->db->resultSet();
        return $results;
    }

    //  the teachers insert query

    public function getparentById($id)
    {
        $this->db->query('SELECT * FROM parents WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function creatparent($data)
    {
        // prepare query
        $this->db->query('INSERT INTO parents (parentname, parentgender, parentclass, parents, parentadress, parentbirth, parentemail) VALUES(:parentname, :parentgender, :parentclass, :parents, :parentadress, :parentbirth, :parentemail)');
        // we bind values
        $this->db->bind(':parentname', $data['parentname']);
        $this->db->bind(':parentgender', $data['parentgender']);
        $this->db->bind(':parentclass', $data['parentclass']);
        $this->db->bind(':parents', $data['parents']);
        $this->db->bind(':parentadress', $data['parentadress']);
        $this->db->bind(':parentbirth', $data['parentbirth']);
        $this->db->bind(':parentemail', $data['parentemail']);

        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateparent($data)
    {
        $this->db->query('UPDATE parents SET parentname = :parentname, parentgender = :parentgender, parentclass = :parentclass, parents = :parents, parentadress = :parentadress, parentbirth = :parentbirth, parentemail = :parentemail WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':parentname', $data['parentname']);
        $this->db->bind(':parentgender', $data['parentgender']);
        $this->db->bind(':parentclass', $data['parentclass']);
        $this->db->bind(':parents', $data['parents']);
        $this->db->bind(':parentadress', $data['parentadress']);
        $this->db->bind(':parentbirth', $data['parentbirth']);
        $this->db->bind(':parentemail', $data['parentemail']);
        //  the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deletparent($data)
    {
        $this->db->query('DELETE FROM `parents` WHERE id = :id');
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
