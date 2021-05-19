

<?php
class Dashboards extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->teacherModel = $this->Model('Teacher');
        $this->studentModel = $this->Model('Student');
    }
    public function parents()
    {
        $this->view('dashboards/parents/parents');
    }
    public function students()
    {
        $students =  $this->studentModel->getStudent();

        $data = [
            'students' => $students,
            'studentsname' => '',
            'studentsgender' => '',
            'studentsclass' => '',
            'parents' => '',
            'studentadress' => '',
            'studentbirth' => '',
            'studentemail' => ''

        ];
        $this->view('dashboards/students/students', $data);
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
