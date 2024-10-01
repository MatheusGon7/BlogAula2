<?php

    class DataBase{
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "ifro";
        private $banco = "blogAula";
        private $porta = "3306";
        private $dbh;

        public function __construct(){
            $dns = "mysql:host=".$this->host.";port=".$this->porta.";dbname=".$this->banco;
            $opcoes = [
                //armazena em cache a conexão para ser reutilizada, evitando
                // sobrecarga de uma nova conexão;
                PDO::ATTR_PERSISTENT => true,
                //lança um PDOException se ocorrer um erro
                PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
            ];

            try{

            }catch(PDOException $e){
                echo "Erro! ".$e->getMessage()."<br/>";
                die();
            }
        }
    }
?>