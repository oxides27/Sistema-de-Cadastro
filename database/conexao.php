<?php

class db{
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'login';

    public function conecta_mysql(){
        mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($con, 'utf8');

        if(mysqli_connect_errno()){
            echo 'Deu merda'.mysqli_connect_error();
        }

        return $con;
    }
}

?>