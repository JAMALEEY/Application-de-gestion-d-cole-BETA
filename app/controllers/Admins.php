


<?php
class Admins extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('admin');

    }

    public function login()
    {
        $this->view('admins/login');
    }



}
