

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
                'teachername' => trim($_POST['teachername']),
                'teachergender' => trim($_POST['teachergender']),
                'teacherclasse' => trim($_POST['teacherclasse']),
                'teachermatiere' => trim($_POST['teachermatiere']),
                'teacherphone' => trim($_POST['teacherphone']),
                'user_id' => trim($_SESSION['user_id']),
                // 'title' => trim($_POST['']),
                'teachername_error' => '',
                'teachergender_error' => '',
                'teacherclasse_error' => '',
                'teachermatiere_error' => '',
                'teacherphone_error' => ''
            ];
            if (empty($data['teachername'])) {
                $data['teachername_error'] = 'Please enter Contact Name';
            }
            if (empty($data['teachergender'])) {
                $data['teachergender_error'] = 'Please enter Contact Name';
            }
            if (empty($data['teacherclasse'])) {
                $data['teacherclasse_error'] = 'Entrez la classe du professeur';
            }
            if (empty($data['teachermatiere'])) {
                $data['teachermatiere_error'] = 'Entrez la matiere du professeur';
            }
            if (empty($data['teacherphone'])) {
                $data['teacherphone_error'] = 'Entrez le telephone du professeur';
            }
            // make sure theres no errors
            if ((empty($data['teachergender_error'])) && (empty($data['teacherphone_error'])) && (empty($data['teachermatiere_error'])) && (empty($data['teachername_error'])) && (empty($data['teacherclass_error']))) {
                // validated stuff
                if ($this->teacherModel->creatTeacher($data)) {
                    header('location:teachers.php');
                } else {
                    die('ERROR');
                }
            } else {
                $this->view('dashboard/teachers/teachers', $data);
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
