<?php

namespace MyApp;

class JobView
{
    public function showJson()
    {
        header('Content-Type: application/json');
        if (empty($_POST['job_title']) || empty($_POST['entry_date'])) {
            $response = ['error' => "Job Title and Entry Date are required fields"];
            http_response_code(400);
        } else {
            $jobData = [
                'job_title' => $_POST['job_title'],
                'job_description' => $_POST['job_description'],
                'job_est_hours' => $_POST['job_est_hours'],
                'entry_date' => $_POST['entry_date'],
                'schedule_start_date' => $_POST['schedule_start_date'],
                'schedule_end_date' => $_POST['schedule_end_date'],
            ];
            $response = ['message' => "Job added successfully", 'data' => $jobData];
        }

        echo json_encode($response);
    }

    public function showForm()
    {
        include 'assets/form.html';
    }
}
