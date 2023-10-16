<?php

namespace MyApp;

use MyApp\JobView;

class JobController
{
    private $view;

    public function __construct()
    {
        $this->view = new JobView();
    }

    public function run()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->view->showJson();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view->showForm();
        }
    }
}
