


<?php
class Admins extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->teacherModel = $this->Model('Teacher');
    }





    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_error' => '',
                'password_error' => '',
            ];
            // Validate Email
            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter email';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_error'] = 'Please enter password';
            }


            // check for admin/email
            if ($this->adminModel->findAdminByEmail($data['email'])) {
                // admin found


            } else {
                // admin not found
                $data['email_error'] = 'No admin found with this E-mail please register first to access the platform ! ';
            }


            // Make sure errors are empty
            if (empty($data['email_error']) && empty($data['password_error'])) {
                // Validated
                // check and set logged in admin
                $signedInAdmin = $this->adminModel->login($data['email'], $data['password']);
                if ($signedInAdmin) {
                    $this->createAdminSession($signedInAdmin);
                    // creat session variables
                    die('success');
                } else {
                    $data['password_error'] = 'Password inccorect';
                    // load the view the page with the error msg
                    $this->view('/admins/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('/admins/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_error' => '',
                'password_error' => '',
            ];

            // Load view
            $this->view('/admins/login', $data);
            }
        }






    public function createAdminSession($admin)
    {
        $_SESSION['admin_id'] = $admin->id;
        $_SESSION['admin_email'] = $admin->id;
        $_SESSION['admin_name'] = $admin->id;
        header('location: ../dashboards/teachers');
    }



    public function logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_id']);
        session_destroy();
        header('location: ../admins/login');
    }



    }
