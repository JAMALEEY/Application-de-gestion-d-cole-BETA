
<?php
class Theparent
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function gettheparent()
    {
        $this->db->query('SELECT `id`, `theparentname`, `theparentgender`, `theparentclass`, `theparents`, `theparentadress`, `theparentbirth`, `theparentemail` FROM `theparents`');
        $this->db->bind(':theparentname', 'theparentname');
        $this->db->bind(':theparentgender', 'theparentgender');
        $this->db->bind(':theparentclass', 'theparentclass');
        $this->db->bind(':theparents', 'theparents');
        $this->db->bind(':theparentadress', 'theparentadress');
        $this->db->bind(':theparentbirth', 'theparentbirth');
        $this->db->bind(':theparentemail', 'theparentemail');
        $results = $this->db->resultSet();
        return $results;
    }

    //  the teachers insert query

    public function gettheparentById($id)
    {
        $this->db->query('SELECT * FROM theparents WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function creattheparent($data)
    {
        // prepare query
        $this->db->query('INSERT INTO theparents (theparentname, theparentgender, theparentclass, theparents, theparentadress, theparentbirth, theparentemail) VALUES(:theparentname, :theparentgender, :theparentclass, :theparents, :theparentadress, :theparentbirth, :theparentemail)');
        // we bind values
        $this->db->bind(':theparentname', $data['theparentname']);
        $this->db->bind(':theparentgender', $data['theparentgender']);
        $this->db->bind(':theparentclass', $data['theparentclass']);
        $this->db->bind(':theparents', $data['theparents']);
        $this->db->bind(':theparentadress', $data['theparentadress']);
        $this->db->bind(':theparentbirth', $data['theparentbirth']);
        $this->db->bind(':theparentemail', $data['theparentemail']);

        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updatetheparent($data)
    {
        $this->db->query('UPDATE theparents SET theparentname = :theparentname, theparentgender = :theparentgender, theparentclass = :theparentclass, theparents = :theparents, theparentadress = :theparentadress, theparentbirth = :theparentbirth, theparentemail = :theparentemail WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':theparentname', $data['theparentname']);
        $this->db->bind(':theparentgender', $data['theparentgender']);
        $this->db->bind(':theparentclass', $data['theparentclass']);
        $this->db->bind(':theparents', $data['theparents']);
        $this->db->bind(':theparentadress', $data['theparentadress']);
        $this->db->bind(':theparentbirth', $data['theparentbirth']);
        $this->db->bind(':theparentemail', $data['theparentemail']);
        //  the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function delettheparent($data)
    {
        $this->db->query('DELETE FROM `theparents` WHERE id = :id');
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
