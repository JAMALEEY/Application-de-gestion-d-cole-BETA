

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
}
