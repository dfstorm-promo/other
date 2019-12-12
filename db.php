<?php

class DB{

    private $link;
    private $table;
    private $config;

    public function __construct($config){
        $this->config = $config;
        $this->table = $config['table'];
        $this->connect();
    }

    private function connect(){
        $this->link = new mysqli($this->config['host'], $this->config['user'], $this->config['password'], $this->config['database']);
        if($this->link->connect_error) {
            die('Connect Error ('.$this->link->connect_errno.') '.$this->link->connect_error);
        }
    }

    public function saveComment($request){
        $sql= "INSERT INTO $this->table (name, mail, text) VALUES (?,?,?)";
        $query = $this->link->prepare($sql);
        $query->bind_param('sss', $request['name'], $request['mail'], $request['text']);
        if($query->execute()){
            $id = $this->link->insert_id;
            $this->link->close();
            return $id;
        }
    }
    public function getComments(){
        $sql="SELECT * FROM $this->table";
        $result = $this->link->query($sql);
        $this->link->close();
        return $result;
    }
}

