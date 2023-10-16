<?php

namespace MyApp\Tests;

use MyApp\JobController;
use MyApp\JobView;
use PHPUnit\Framework\TestCase;

class JobControllerTest extends TestCase
{
    public function testRunWithGETRequest()
    {

        $_SERVER['REQUEST_METHOD'] = 'GET';

        $viewMock = $this->createMock(JobView::class);

        $viewMock->expects($this->once())->method('showForm');

        $controller = new JobController();
        $reflection = new \ReflectionProperty(JobController::class, 'view');
        $reflection->setAccessible(true);
        $reflection->setValue($controller, $viewMock);

        $controller->run();
    }

    public function testRunWithPOSTRequest()
    {

        $_SERVER['REQUEST_METHOD'] = 'POST';


        $viewMock = $this->createMock(JobView::class);


        $viewMock->expects($this->once())->method('showJson');

        $controller = new JobController();
        $reflection = new \ReflectionProperty(JobController::class, 'view');
        $reflection->setAccessible(true);
        $reflection->setValue($controller, $viewMock);

        $controller->run();
    }
}
