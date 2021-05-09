

<?php
class Dashboards extends Controller
{

    public function teachers()
    {
        $data = [
            'teachername' => '',
            'teachergender' => '',
            'teacherclasse' => '',
            'teachermatiere' => '',
            'teacherphone' => ''
        ];
        
        $this->view('dashboards/teachers/teachers', $data);
        
    }
    public function parents()
    {
        $this->view('dashboards/parents/parents');
    }
    public function students()
    {
        $this->view('dashboards/students/students');
    }



    public function __construct()
    {


    }


            public function creatTeacher(){
        $data = [
            'teachername' => '',
            'teachergender' => '',
            'teacherclasse' => '',
            'teachermatiere' => '',
            'teacherphone' => ''
        ];
        $this->view('dashboards/teachers/teachers', $data);
    


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                
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
            if (empty($data['teachergender_error']) && (empty($data['teacherphone_error'])) && (empty($data['teachermatiere_error'])) && (empty($data['teachername_error'])) && (empty($data['teacherphone_error'])) && (empty($data['teacherclass_error']))) {
                // validated stuff
                if ($this->teacherModel->creatTeacher($data)) {
                    header('location:teachers.php');
                } else {
                    die('ERROR');
                }
            } else {
                $this->view('dashboards/teachers/teachers', $data);
            }





        } else {
// we initialize data then
            $data = [
                'teachername' => '',
                'teachergender' => '',
                'teacherclasse' => '',
                'teachermatiere' => '',
                'teacherphone' => ''
            ];
            $this->view('dashboards/teachers/teachers', $data);
        }
    }



}
