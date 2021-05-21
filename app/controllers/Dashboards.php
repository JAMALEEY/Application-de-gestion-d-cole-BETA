

<?php
class Dashboards extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->teacherModel = $this->Model('Teacher');
        $this->studentModel = $this->Model('Student');
        $this->theparentModel = $this->Model('theparent');
    }


    public function students()
    {
        
        $students =  $this->studentModel->getStudent();
        $data = [
            'students' => $students,
            'studentname' => '',
            'studentgender' => '',
            'studentclass' => '',
            'theparents' => '',
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
                'theparents' => trim($_POST['theparents']),
                'studentadress' => trim($_POST['studentadress']),
                'studentbirth' => trim($_POST['studentbirth']),
                'studentemail' => trim($_POST['studentemail']),
                'studentname_error' => '',
                'studentgender_error' => '',
                'studentclass_error' => '',
                'theparents_error' => '',
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
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->studentModel->creatStudent($data)) {
                    header('location: students.php');
                } else {
                    die('ERROR');
                }
            } else {
                $this->view('dashboards/students/students', $data);
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
            $this->view('dashboards/students/students', $data);
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
                'studentsname' => trim($_POST['studentsname']),
                'studentsgender' => trim($_POST['studentsgender']),
                'studentsclass' => trim($_POST['studentsclass']),
                'theparents' => trim($_POST['theparents']),
                'studentadress' => trim($_POST['studentadress']),
                'studentbirth' => trim($_POST['studentbirth']),
                'studentemail' => trim($_POST['studentemail']),
                'studentsname_error' => '',
                'studentsgender_error' => '',
                'studentsclass_error' => '',
                'theparents_error' => '',
                'studentadress_error' => '',
                'studentbirth_error' => '',
                'studentemail_error' => ''
            ];
            if (empty($data['studentsname'])) {
                $data['studentsname_error'] = 'Please enter student Name';
            }
            if (empty($data['studentsgender'])) {
                $data['studentsgender_error'] = 'Please enter student gender';
            }
            if (empty($data['studentsclass'])) {
                $data['studentsclass_error'] = 'Entrez la classe de l\'etudiant';
            }
            if (empty($data['theparents'])) {
                $data['theparents_error'] = 'Entrez la matiere du professeur';
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
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->studentModel->updateStudent($data)) {
                    header('location: ../students.php');
                } else {
                    die('ERROR');
                }
            } else {


                $this->view('dashboards/students/students', $data);
            }
        } else {
            // get existing contact from model
            $student = $this->studentsModel->getStudentById($id);
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



    public function theparents()
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
        $this->view('dashboards/theparents/theparents', $data);
    }


    public function creattheparent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $theparents =  $this->theparentModel->gettheparent();
            $theparentname =  $this->theparentModel->gettheparent();
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'theparentname' => trim($_POST['theparentname']),
                'theparentgender' => trim($_POST['theparentgender']),
                'theparentclass' => trim($_POST['theparentclass']),
                'theparents' => trim($_POST['theparents']),
                'theparentadress' => trim($_POST['theparentadress']),
                'theparentbirth' => trim($_POST['theparentbirth']),
                'theparentemail' => trim($_POST['theparentemail']),
                'theparentname_error' => '',
                'theparentgender_error' => '',
                'theparentclass_error' => '',
                'theparents_error' => '',
                'theparentadress_error' => '',
                'theparentbirth_error' => '',
                'theparentemail_error' => ''
            ];
            if (empty($data['theparentname'])) {
                $data['theparentname_error'] = 'Please enter theparent Name';
            }
            if (empty($data['theparentgender'])) {
                $data['theparentgender_error'] = 'Please enter theparent Name';
            }
            if (empty($data['theparentclass'])) {
                $data['theparentclasse_error'] = 'Entrez la classe du theparent';
            }
            if (empty($data['theparentmatiere'])) {
                $data['theparentmatiere_error'] = 'Entrez la matiere du theparent';
            }
            if (empty($data['theparentemail'])) {
                $data['theparentemail_error'] = 'Entrez l\'email du theparent';
            }
            // make sure theres no errors
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->theparentModel->creattheparent($data)) {
                    header('location: theparents.php');
                } else {
                    die('ERROR');
                }
            } else {
                $this->view('dashboards/theparents/theparents', $data);
            }
        } else {
            // we initialize data then
            $data = [
                'theparentname' => '',
                'theparentgender' => '',
                'theparentclass' => '',
                'theparents' => '',
                'theparentadress' => '',
                'theparentbirth' => '',
                'theparentemail' => ''
            ];
            $this->view('dashboards/theparents/theparents', $data);
        }
    }















    public function updatetheparent($id)
    {
        $theparent = $this->theparentModel->gettheparentById($id);
        $data = [
            'UPDATE' => $theparent
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'theparentsname' => trim($_POST['theparentsname']),
                'theparentsgender' => trim($_POST['theparentsgender']),
                'theparentsclass' => trim($_POST['theparentsclass']),
                'theparents' => trim($_POST['theparents']),
                'theparentadress' => trim($_POST['theparentadress']),
                'theparentbirth' => trim($_POST['theparentbirth']),
                'theparentemail' => trim($_POST['theparentemail']),
                'theparentsname_error' => '',
                'theparentsgender_error' => '',
                'theparentsclass_error' => '',
                'theparents_error' => '',
                'theparentadress_error' => '',
                'theparentbirth_error' => '',
                'theparentemail_error' => ''
            ];
            if (empty($data['theparentsname'])) {
                $data['theparentsname_error'] = 'Please enter theparent Name';
            }
            if (empty($data['theparentsgender'])) {
                $data['theparentsgender_error'] = 'Please enter theparent gender';
            }
            if (empty($data['theparentsclass'])) {
                $data['theparentsclass_error'] = 'Entrez la classe de l\'etudiant';
            }
            if (empty($data['theparents'])) {
                $data['theparents_error'] = 'Entrez la matiere du professeur';
            }
            if (empty($data['theparentadress'])) {
                $data['theparentadress_error'] = 'Entrez l\'adresse de l\'etudiant';
            }
            if (empty($data['theparentbirth'])) {
                $data['theparentbirth_error'] = 'Entrez la date de naissance de l\'etudiant';
            }
            if (empty($data['theparentemail'])) {
                $data['theparentemail_error'] = 'Entrez l\'E-mail de l\'etudiant';
            }
            // make sure theres no errors
            if (empty($data['teachergender_error']) && empty($data['teacherphone_error']) && empty($data['teachermatiere_error']) && empty($data['teachername_error']) && empty($data['teacherclasse_error'])) {
                // validated stuff
                if ($this->theparentModel->updatetheparent($data)) {
                    header('location: ../theparents.php');
                } else {
                    die('ERROR');
                }
            } else {


                $this->view('dashboards/theparents/theparents', $data);
            }
        } else {
            // get existing contact from model
            $theparent = $this->theparentsModel->gettheparentById($id);
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
                'theparentclass' =>  $theparent->theparentclass,
                'theparents' =>  $theparent->theparents,
                'theparentadress' =>  $theparent->theparentadress,
                'theparentbirth' =>  $theparent->theparentbirth,
                'theparentemail' =>  $theparent->theparentemail
            ];

            $this->view('dashboards/theparents/theparents', $data);
        }
    }



























    public function search()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $stmt = $this->db->prepare();
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    echo $teachername;
                }
            }
        }



        $this->view('dashboards/search');
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


                $this->view('dashboards/teachers/teachers', $data);
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

            $this->view('dashboards/teachers/teachers', $data);
        }
    }














    public function deleteTeacher($id)
    {

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
            header('teachers.php');
        }
    }
}
