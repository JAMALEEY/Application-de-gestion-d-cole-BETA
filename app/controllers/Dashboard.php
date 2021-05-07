

<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    }

    public function teachers()
    {
        $this->view('dashboard/teachers');
    }
}
