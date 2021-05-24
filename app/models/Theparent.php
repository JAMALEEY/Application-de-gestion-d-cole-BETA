
<?php
class Theparent
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTheParent()
    {
        $this->db->query('SELECT `id`, `parentname`, `parentgender`, `parentjob`, `parentadress`, `parentphone` FROM `theparents`');
        $this->db->bind(':parentname', 'theparentname');
        $this->db->bind(':parentgender', 'theparentgender');
        $this->db->bind(':parentjob', 'theparentclass');
        $this->db->bind(':parentadress', 'theparents');
        $this->db->bind(':parentphone', 'theparentadress');
        $results = $this->db->resultSet();
        return $results;
    }

    //  the teachers insert query

    public function getTheParentById($id)
    {
        $this->db->query('SELECT * FROM theparents WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function creattheparent($data)
    {
        // prepare query
        $this->db->query('INSERT INTO theparents (parentname, parentgender, parentjob, parentadress, parentphone) VALUES(:parentname, :parentgender, :parentjob, :parentadress, :parentphone)');
        // we bind values
        $this->db->bind(':parentname', $data['theparentname']);
        $this->db->bind(':parentgender', $data['theparentgender']);
        $this->db->bind(':parentjob', $data['theparentjob']);
        $this->db->bind(':parentadress', $data['theparentadress']);
        $this->db->bind(':parentphone', $data['theparentphone']);

        // the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updatetheparent($data)
    {
        $this->db->query('UPDATE theparents SET parentname = :theparentname, parentgender = :theparentgender, parentjob = :theparentjob, parentadress = :theparentadress, parentphone = :theparentphone WHERE id = :id');
        // we bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':theparentname', $data['theparentname']);
        $this->db->bind(':theparentgender', $data['theparentgender']);
        $this->db->bind(':theparentjob', $data['theparentjob']);
        $this->db->bind(':theparentadress', $data['theparentadress']);
        $this->db->bind(':theparentphone', $data['theparentphone']);
        $this->db->bind(':theparentbirth', $data['theparentbirth']);
        $this->db->bind(':theparentemail', $data['theparentemail']);
        //  the execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deletetheparent($data)
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











    public function search()
    {

        if (isset($_POST['search'])) {

            $key = $_POST['search'];
            $this->db->query("SELECT * FROM theparents WHERE theparents.parentname LIKE '%$key%' OR theparents.parentgender LIKE '%$key%' OR theparents.parentjob LIKE '%$key%' OR theparents.parentadress LIKE '%$key%' OR theparents.parentphone LIKE '%$key%'");

            $searchresult = $this->db->resultSet();
            return $searchresult;
        } else {
            die('Not Found');
        }
    }
}
