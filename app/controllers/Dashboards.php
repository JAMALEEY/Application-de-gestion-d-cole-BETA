

<?php
class Dashboards extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->teacherModel = $this->Model('Teacher');
        $this->studentModel = $this->Model('Student');
        $this->theparentModel = $this->Model('Theparent');

    }


    public function students()
    {
        
        $students =  $this->studentModel->getStudent();
        $data = [
            'students' => $students,
            'studentname' => '',
            'studentgender' => '',
            'studentclass' => '',
            'stdparents' => '',
            'studentadress' => '',
            'studentbirth' => '',
            'studentemail' => ''

        ];
        $this->view('dashboards/students/students', $data);
    }




    //  CREAT STUDENT CONTROLLER

    public function creatStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $students =  $this->studentModel->getStudent();
            $studentname =  $this->studentModel->getStudent();
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'studentname' => trim($_POST['studentname']),
                'studentgender' => trim($_POST['studentgender']),
                'studentclass' => trim($_POST['studentclass']),
                'stdparents' => trim($_POST['stdparents']),
                'studentadress' => trim($_POST['studentadress']),
                'studentbirth' => trim($_POST['studentbirth']),
                'studentemail' => trim($_POST['studentemail']),
                'studentname_error' => '',
                'studentgender_error' => '',
                'studentclass_error' => '',
                'stdparents_error' => '',
                'studentadress_error' => '',
                'studentbirth_error' => '',
                'studentemail_error' => ''
            ];
            if (empty($data['studentname'])) {
                $data['studentname_error'] = 'Please enter student Name';
            }
            if (empty($data['studentgender'])) {
                $data['studentgender_error'] = 'Please enter student Name';
            }
            if (empty($data['studentclass'])) {
                $data['studentclasse_error'] = 'Entrez la classe du student';
            }
            if (empty($data['studentmatiere'])) {
                $data['studentmatiere_error'] = 'Entrez la matiere du student';
            }
            if (empty($data['studentemail'])) {
                $data['studentemail_error'] = 'Entrez l\'email du student';
            }
            // make sure theres no errors
            if (empty($data['studentname_error']) && empty($data['studentgender_error']) && empty($data['studentclass_error']) && empty($data['stdparents_error']) && empty($data['studentadress_error']) && empty($data['studentbirth_error']) && empty($data['studentemail_error']) )  {
                // validated stuff
                if ($this->studentModel->creatStudent($data)) {
                    header('location: students');
                } else {
                    die('ERROR');
                }
            } else {
                header('location: students');
            }
        } else {
            // we initialize data then
            $data = [
                'studentname' => '',
                'studentgender' => '',
                'studentclass' => '',
                'theparents' => '',
                'studentadress' => '',
                'studentbirth' => '',
                'studentemail' => ''
            ];
            header('location: students');
        }
    }















    public function updateStudent($id)
    {
        $student = $this->studentModel->getStudentById($id);
        $data = [
            'UPDATE' => $student
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'studentname' => trim($_POST['studentname']),
                'studentgender' => trim($_POST['studentgender']),
                'studentclass' => trim($_POST['studentclass']),
                'stdparents' => trim($_POST['stdparents']),
                'studentadress' => trim($_POST['studentadress']),
                'studentbirth' => trim($_POST['studentbirth']),
                'studentemail' => trim($_POST['studentemail']),
                'studentname_error' => '',
                'studentgender_error' => '',
                'studentclass_error' => '',
                'stdparent_error' => '',
                'studentadress_error' => '',
                'studentbirth_error' => '',
                'studentemail_error' => ''
            ];
            if (empty($data['studentname'])) {
                $data['studentname_error'] = 'Please enter student Name';
            }
            if (empty($data['studentgender'])) {
                $data['studentgender_error'] = 'Please enter student gender';
            }
            if (empty($data['studentclass'])) {
                $data['studentclass_error'] = 'Entrez la classe de l\'etudiant';
            }
            if (empty($data['stdparents'])) {
                $data['stdparents_error'] = 'Entrez la matiere du professeur';
            }
            if (empty($data['studentadress'])) {
                $data['studentadress_error'] = 'Entrez l\'adresse de l\'etudiant';
            }
            if (empty($data['studentbirth'])) {
                $data['studentbirth_error'] = 'Entrez la date de naissance de l\'etudiant';
            }
            if (empty($data['studentemail'])) {
                $data['studentemail_error'] = 'Entrez l\'E-mail de l\'etudiant';
            }
            // make sure theres no errors
            if (empty($data['studentgender_error']) && empty($data['studentclass_error']) && empty($data['studentbirth_error']) && empty($data['studentadress_error']) && empty($data['studentbirth_error'])) {
                // validated stuff
                if ($this->studentModel->updateStudent($data)) {
                    header('location: ../students');
                } else {
                    die('ERROR');
                }
            } else {


                $this->view('dashboards/students/students', $data);
            }
        } else {
            // get existing contact from model
            $student = $this->studentModel->getStudentById($id);
            $data = [
                'student' => $student
            ];

            // check for owner
            // if ($teacher->admin_id != $_SESSION['admin_id']) {

            //     redirect('teacher');
            // }

            $data = [
                'id' => $id,
                'studentname' => $student->studentname,
                'studentgender' => $student->studentgender,
                'studentclass' =>  $student->studentclass,
                'theparents' =>  $student->theparents,
                'studentadress' =>  $student->studentadress,
                'studentbirth' =>  $student->studentbirth,
                'studentemail' =>  $student->studentemail
            ];

            $this->view('dashboards/students/students', $data);
        }
    }





















    // lets start the theparents stuff 

    //  CREAT theparent CONTROLLER



    public function Theparents()
    {
        $theparents =  $this->theparentModel->gettheparent();
        $data = [
            'theparents' => $theparents,
            'theparentname' => '',
            'theparentgender' => '',
            'theparentjob' => '',
            'theparentadress' => '',
            'theparentphone' => ''
        ];
        $this->view('dashboards/parents/theparents', $data);
    }


    public function Creattheparent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $theparents =  $this->theparentModel->gettheparent();
            $theparentname =  $this->theparentModel->gettheparent();
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'theparentname' => trim($_POST['theparentname']),
                'theparentgender' => trim($_POST['theparentgender']),
                'theparentjob' => trim($_POST['theparentjob']),
                'theparentadress' => trim($_POST['theparentadress']),
                'theparentphone' => trim($_POST['theparentphone']),
                'theparentname_error' => '',
                'theparentgender_error' => '',
                'theparentjob_error' => '',
                'theparentphone_error' => '',
                'theparentadress_error' => ''
            ];
            if (empty($data['theparentname'])) {
                $data['theparentname_error'] = 'Please enter the parent Name';
            }
            if (empty($data['theparentgender'])) {
                $data['theparentgender_error'] = 'Please enter parent gender';
            }
            if (empty($data['theparentjob'])) {
                $data['theparentjob_error'] = 'Entrez le job du parent';
            }
            if (empty($data['theparentadress'])) {
                $data['theparentadress_error'] = 'Entrez l\'adresse du parent';
            }
            if (empty($data['theparentphone'])) {
                $data['theparentphone_error'] = 'Entrez le telephone du parent';
            }
            // make sure theres no errors
            if (empty($data['theparentname_error']) && empty($data['theparentgender_error']) && empty($data['theparentjob_error']) && empty($data['theparentadress_error']) && empty($data['theparentphone_error'])) {
                // validated stuff
                if ($this->theparentModel->creattheparent($data)) {
                    header('location: theparents');

                } else {
                    die('ERROR');
                }
            } else {
                $this->view('dashboards/parents/theparents', $data);
            }
        } else {
            // we initialize data then
            $data = [
                'theparentname' => '',
                'theparentgender' => '',
                'theparentjob' => '',
                'theparentadress' => '',
                'theparentphone' => ''
            ];
            $this->view('dashboards/parents/theparents', $data);
        }
    }















    public function updateTheParent($id)
    {
        $theparent = $this->theparentModel->getTheParentById($id);
        $data = [
            'UPDATE' => $theparent
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'theparentname' => trim($_POST['theparentname']),
                'theparentgender' => trim($_POST['theparentgender']),
                'theparentjob' => trim($_POST['theparentjob']),
                'theparentadress' => trim($_POST['theparentadress']),
                'theparentphone' => trim($_POST['theparentphone']),
                'theparentsname_error' => '',
                'theparentsgender_error' => '',
                'theparentjob_error' => '',
                'theparentphone_error' => '',
                'theparentadress_error' => '',
    
            ];
            if (empty($data['theparentname'])) {
                $data['theparentname_error'] = 'Please enter theparent Name';
            }
            if (empty($data['theparentgender'])) {
                $data['theparentgender_error'] = 'Please enter theparent gender';
            }
           
            if (empty($data['theparentjob'])) {
                $data['theparentjob_error'] = 'Entrez la matiere du professeur';
            }
            if (empty($data['theparentadress'])) {
                $data['theparentadress_error'] = 'Entrez l\'adresse de l\'etudiant';
            }
            if (empty($data['theparentphone'])) {
                $data['theparentphone_error'] = 'Entrez l\'adresse de l\'etudiant';
            }

            // make sure theres no errors
            if (empty($data['theparentname_error']) && empty($data['theparentgender_error']) && empty($data['theparentjob_error']) && empty($data['theparentadress_error'])&& empty($data['theparentphone_error'])) {
                // validated stuff
                if ($this->theparentModel->updateTheParent($data)) {
                    header('location: ../theparents');
                } else {
                    die('ERROR');
                }
            } else {
                

                $this->view('dashboards/parents/theparents', $data);
            }
        } else {
            // get existing contact from model
            $theparent = $this->theparentsModel->getTheParentById($id);
            $data = [
                'theparent' => $theparent
            ];

            // check for owner
            // if ($teacher->admin_id != $_SESSION['admin_id']) {

            //     redirect('teacher');
            // }

            $data = [
                'id' => $id,
                'theparentname' => $theparent->theparentname,
                'theparentgender' => $theparent->theparentgender,
                'theparentjob' =>  $theparent->theparentjob,
                'theparentadress' =>  $theparent->theparentadress,
                'theparentphone' =>  $theparent->theparentphone
            ];

            $this->view('dashboards/parents/theparents', $data);
        }
    }



    public function deleteTheParent($id)
    {
        $theparent = $this->theparentModel->getTheParentById($id);
        $data = [
            'theparent' => $theparent
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->theparentModel->deleteTheParent($id)) {
                header('location: ../theparents');
            } else {
                die('Something went wrong');
            }
        } else {
            $this->view('dashboards/parents/theparents', $data);
        }
    }
























    public function search()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ( ($data = $this -> teacherModel -> search()) || ($data = $this->studentModel->search())|| ($data = $this->theparentModel->search())  )

            {


                $this->view('dashboards/search', $data);
    
            
            // if ($stmt->rowCount() > 0) {
            //     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //         extract($row);
            //         $this->view('dashboards/search', $data);
                    }
                    else {
                        $data = [
                            "Search not found"
                        ];
                

                    }
                }
            }
        







// excel function

public function excel(){
        if (isset($_POST["export_data"])) {
            $filename = "teachers_data_export_" . date('Ymd') . ".xls";
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$filename\"");
            $show_coloumn = false;
            $teachers =  $this->teacherModel->getTeacher();
            if (!empty($teachers)) {

                $data = [
                    'teachers' => $teachers,
                    'teachername' => '',
                    'teachergender' => '',
                    'teacherclasse' => '',
                    'teachermatiere' => '',
                    'teacherphone' => ''

                ];
                foreach ($data['teachers'] as $teacher) { 
                    if (!$show_coloumn) {
                        // display field/column names in first row
                        echo implode("\t", array_keys($data['teachername'])) . "\n";
                        $show_coloumn = true;
                    }
                    echo implode("\t", array_values($data['teachers'])) . "\n";
                }
            }
            exit;
        }
}




















    public function index()
    {
        $teachers =  $this->teacherModel->getTeacher();

        $data = [
            'teachers' => $teachers,
            'teachername' => '',
            'teachergender' => '',
            'teacherclasse' => '',
            'teachermatiere' => '',
            'teacherphone' => ''

        ];
        $this->view('dashboards/teachers/teachers', $data);
    }







    public function creatTeacher()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $teachers =  $this->teacherModel->getTeacher();
            $teachername =  $this->teacherModel->getTeacher();
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'teachername' => trim($_POST['teachername']),
                'teachergender' => trim($_POST['teachergender']),
                'teacherclasse' => trim($_POST['teacherclasse']),
                'teachermatiere' => trim($_POST['teachermatiere']),
                'teacherphone' => trim($_POST['teacherphone']),
                // 'user_id' => trim($_SESSION['user_id']),
                // 'title' => trim($_POST['']),
                'teachername_error' => '',
                'teachergender_error' => '',
                'teacherclasse_error' => '',
                'teachermatiere_error' => '',
                'teacherphone_error' => ''
            ];
            if (empty($data['teachername'])) {
                $data['teachername_error'] = 'Please enter teacher Name';
            }
            if (empty($data['teachergender'])) {
                $data['teachergender_error'] = 'Please enter teacher Name';
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
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->teacherModel->creatTeacher($data)) {
                    header('location: teachers.php');
                } else {
                    header('location: teachers.php');
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
            header('location: teachers.php');
        }
    }


    }





    public function updateTeacher($id)
    {
        $teacher = $this->teacherModel->getTeacherById($id);
        $data = [
            'UPDATE' => $teacher
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'teachername' => trim($_POST['teachername']),
                'teachergender' => trim($_POST['teachergender']),
                'teacherclasse' => trim($_POST['teacherclasse']),
                'teachermatiere' => trim($_POST['teachermatiere']),
                'teacherphone' => trim($_POST['teacherphone']),
                // 'admin_id' => trim($_SESSION['admin_id']),
                // 'title' => trim($_POST['']),
                'teachername_error' => '',
                'teachergender_error' => '',
                'teacherclasse_error' => '',
                'teachermatiere_error' => '',
                'teacherphone_error' => ''
            ];
            if (empty($data['teachername'])) {
                $data['teachername_error'] = 'Please enter teacher Name';
            }
            if (empty($data['teachergender'])) {
                $data['teachergender_error'] = 'Please enter teacher Name';
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
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->teacherModel->updateTeacher($data)) {
                    header('location: ../teachers.php');
                } else {
                    die('ERROR');
                }
            } else {


                header('location: ../teachers.php');
            }
        } else {
            // get existing contact from model
            $teacher = $this->teacherModel->getTeacherById($id);
            $data = [
                'teacher' => $teacher
            ];

            // check for owner
            // if ($teacher->admin_id != $_SESSION['admin_id']) {

            //     redirect('teacher');
            // }

            $data = [
                'id' => $id,
                'teachername' => $teacher->teachername,
                'teachergender' => $teacher->teachergender,
                'teacherclasse' => $teacher->teacherclasse,
                'teachermatiere' => $teacher->teachermatiere,
                'teacherphone' => $teacher->teacherphone,
            ];

            header('location: ../teachers.php');
        }
    }














    public function deleteTeacher($id)
    {
        $teacher = $this->teacherModel->getTeacherById($id);
        $data = [
            'teacher' => $teacher
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Get existing teacher from model
            // $teacher = $this->teacherModel->getTeacherById($id);
            // Check for owner *optional i decide to laisser pour apres*
            // if ($teacher->teacher_id != $_SESSION['teacher_id']) {
            //     redirect('teachers');
            // }

            if ($this->teacherModel->deleteTeacher($id)) {
                header('location: ../teachers.php');
            } else {
                die('Something went wrong');
            }
        } else {
            header('location: ../teachers.php');
        }
    }










    public function deleteStudent($id)
    {
        $student = $this->studentModel->getStudentById($id);
        $data = [
            'student' => $student
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->studentModel->deleteStudent($id)) {
                header('location: ../students');
            } else {
                die('Something went wrong');
            }
        } else {
            $this->view('dashboards/students/students', $data);
        }
    }






































    

}
