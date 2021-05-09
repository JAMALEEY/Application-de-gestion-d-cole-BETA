


<?php
class Admins extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('admin');

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


            // check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {
                // user found


            } else {
                // User not found
                $data['email_error'] = 'No User found with this E-mail please register first to access the platform ! ';
            }


            // Make sure errors are empty
            if (empty($data['email_error']) && empty($data['password_error'])) {
                // Validated
                // check and set logged in user
                $signedInUser = $this->userModel->signin($data['email'], $data['password']);
                if ($signedInUser) {
                    $this->createUserSession($signedInUser);

                    // creat session variables
                    die('success');
                } else {
                    $data['password_error'] = 'Password inccorect';
                    // load the view the page with the error msg
                    $this->view('/users/signin', $data);
                }
            } else {
                // Load view with errors
                $this->view('/users/signin', $data);
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
            $this->view('/users/signin', $data);
            }
        }
    }
