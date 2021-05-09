

<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    }

    public function teachers()
    {
        $this->view('dashboard/teachers/teachers');
    }
    public function parents()
    {
        $this->view('dashboard/parents/parents');
    }
    public function students()
    {
        $this->view('dashboard/students/students');
    }




    public function creatTeacher()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset()) {
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'contactname' => trim($_POST['contactname']),
                'phone' => trim($_POST['phone']),
                'email' => trim($_POST['email']),
                'contactadresse' => trim($_POST['contactadresse']),
                'user_id' => trim($_SESSION['user_id']),
                // 'title' => trim($_POST['']),
                'contactname_error' => '',
                'phone_error' => '',
                'email_error' => '',
                'contactadresse_error' => ''
            ];
            if (empty($data['contactname'])) {
                $data['contactname_error'] = 'Please enter Contact Name';
            }
            if (empty($data['phone'])) {
                $data['phone_error'] = 'Please enter phone number';
            }
            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter email';
            }
            if (empty($data['contactadresse'])) {
                $data['contactadresse_error'] = 'Please enter adresse';
            }
            // make sure theres no errors
            if ((empty($data['contactname_error'])) && (empty($data['contactadresse_error'])) && (empty($data['email_error'])) && (empty($data['phone_error']))) {
                // validated stuff
                if ($this->contactModel->creatContact($data)) {
                    flash('contact_message', 'Contact Added Succefully');
                    redirect('contacts');
                } else {
                    die('ERROR');
                }
            } else {
                $this->view('contacts/creat', $data);
            }
        } else {

            $data = [
                'contactname' => '',
                'phone' => '',
                'email' => '',
                'contactadresse' => '',
            ];
            $this->view('contacts/creat', $data);
        }
    }



}
