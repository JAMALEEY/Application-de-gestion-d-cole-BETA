

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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset(($_POST['add_teacher'])))
            {
                
                
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'teacherphone' => trim($_POST['teacherphone']),
                'phone' => trim($_POST['phone']),
                'teachermatiere' => trim($_POST['teachermatiere']),
                'teacherphone' => trim($_POST['teacherphone']),
                'user_id' => trim($_SESSION['user_id']),
                // 'title' => trim($_POST['']),
                'contactname_error' => '',
                'phone_error' => '',
                'teachermatiere_error' => '',
                'teacherphone_error' => ''
            ];
            if (empty($data['contactname'])) {
                $data['contactname_error'] = 'Please enter Contact Name';
            }
            if (empty($data['phone'])) {
                $data['phone_error'] = 'Please enter phone number';
            }
            if (empty($data['teachermatiere'])) {
                $data['teachermatiere_error'] = 'Please enter la matiere du professeur';
            }
            if (empty($data['teacherphone'])) {
                $data['teacherphone_error'] = 'Please enter adresse';
            }
            // make sure theres no errors
            if ((empty($data['contactname_error'])) && (empty($data['teacherphone_error'])) && (empty($data['teachermatiere_error'])) && (empty($data['phone_error']))) {
                // validated stuff
                if ($this->contactModel->creatContact($data)) {
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
