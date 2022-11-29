<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;


class AdminController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction(){
        if (isset($_SESSION['admin'])){
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)){
            if ($this->model->loginValidate($_POST['login'],$_POST['password'])){
                $_SESSION['admin'] = true;
                $this->view->redirect('admin/add');
            }
        }
        $this->view->render('Вход');
    }
    public function registerAction(){
        if(!empty($_POST)){
            if($this->model->registerAdd($_POST['login'], $_POST['password'])){
                $_SESSION['admin'] = true;
                $this->view->redirect('admin/add');
            }
        }
        $this->view->render('register');
    }

    public function  addAction(){
        if(!empty($_POST)){
            $id = $this->model->lastInsertId();
            $this->model->postUploadImage($_FILES['img']['tmp_name'],$id);
            $this->model->postAdd($_POST['title'],$_POST['content'],$id);
        }
        $this->view->render('add post');
    }

    public function editAction(){
        $vars = $this->model->postInfo($this->route['id']);
        if(!empty($_POST)){
            $this->model->postEdit($this->route['id'],$_POST['title'],$_POST['content']);
            $this->view->redirect('admin/posts');
        }
        $this->view->render('edit post', $vars);
    }

    public function deleteAction(){
        $this->model->postDelete($this->route['id']);
        $this->view->redirect('admin/posts');
    }


    public function logoutAction(){
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }
    public function postsAction(){
        $vars = $this->model->postAll();
        $this->view->render('posts', $vars);
    }
}