<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{

    public function getPosts(){
        $result = $this->db->row('SELECT * FROM posts');
        return $result;
    }

    public function postInfo($id){
        $result = $this->db->row('SELECT * FROM posts WHERE id = '. $id . ' LIMIT 1;');
        return $result;
    }
}