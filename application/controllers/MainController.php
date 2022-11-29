<?php

namespace application\controllers;

use application\core\Controller;


class MainController extends Controller
{
    public function IndexAction(){
        $vars = $this->model->getPosts();
        $this->view->render('главная страница',$vars);
    }

    public function postAction(){
       $vars = $this->model->postInfo($this->route['id']);
       $this->view->render('Page post', $vars);
    }


}