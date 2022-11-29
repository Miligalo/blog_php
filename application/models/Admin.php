<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Admin extends Model
{

    public function loginValidate($login,$password){
        $db = new Db();
        $sql = $db->column("SELECT email,password FROM users WHERE email = '" .$login."' and password = '" . $password . "';");
        if($sql == false){
            echo 'error';
            return false;
        }
        return true;
    }
    public function registerAdd($login,$password){
        $db = new Db();
        if($login == null or $password == null){
            return false;
        }
        else{
            $sql = $db->row("INSERT INTO users (email,password) VALUE ('" . $login . "', '". $password . "');");
            return true;
        }
    }

    public function postAdd($title,$content,$img){
        $db = new Db();
        if($title == null or $content == null){
            return fasle;
        }
        else{
            $sql = $db->column("INSERT INTO posts (title,content,images) VALUES ('" . $title . "', '" . $content . "', '/web/materials/". $img . ".jpeg');");
            return true;
        }
    }
    public function postEdit($id,$title, $content){
        $db = new Db();
        if($title == null or $content == null){
            return false;
        }
        else{
            $db->row("UPDATE posts SET title = '". $title . "', content = '" . $content . "' WHERE id = " . $id);
            return true;
        }
    }


    public function postAll(){
        $db = new Db();
        $sql = $db->row("SELECT * FROM posts;");
        return $sql;
    }

    public function lastInsertId(){
        $db = new Db();
        $sql = $db->column("SELECT id FROM posts ORDER BY id DESC LIMIT 1;");
        return $sql + 1;
    }

    public function postUploadImage($patch,$id){
        move_uploaded_file($patch, 'web/materials/' .$id. '.jpeg');
    }

    public function postDelete($id){
        $db = new Db();
        $sql = $db->column('DELETE FROM posts where id = '. $id);
    }

    public function postInfo($id){
        $db = new Db();
        $result = $this->db->row('SELECT * FROM posts WHERE id = '. $id . ' LIMIT 1;');
        return $result;
    }
}
