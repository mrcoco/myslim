<?php

namespace App\Controller;

use Slim\Views\Twig;
use App\Model\UserModel;

class HomeController extends AbstractController
{
    private $user;

    public function __construct()
    {
        //$this->user = $user;
    }

    public function index($request, $response, $args)
    {
        //$users = $this->user->getUsers();
        echo $args;
        $this->logger->info('Home page action dispatched');
        $this->view->render($response, 'home.twig');

        return $response;
    }

    public function test($request, $response, $args)
    {
        echo $args;
    }
}
