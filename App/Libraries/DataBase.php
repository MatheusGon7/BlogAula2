<?php

    class DataBase
    {
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "ifro";
        private $banco = "blogAula";
        private $porta = "3306";
        private $dbh;
        private $stmt;

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
                $this->dbh = new PDO($dns,$this->usuario, $this->senha);
            }catch(PDOException $e){
                echo "Erro! ".$e->getMessage()."<br/>";
                die();
            }
        }

        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        public function bind($parametro, $valor, $tipo = null){
            if(is_null($tipo)):
                switch(true):
                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                        break;

                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                        break;
                    
                    case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                        break;
                    
                    default:
                        $tipo = PDO::PARAM_STR;
                endswitch;
            endif;
            
            $this->stmt->bindValue($parametro,$valor,$tipo);
        }

        public function executa(){
            return $this->stmt->execute();
        }

        public function resultado(){
            $this->executa();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        public function resultados(){
            $this->executa();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        //retorna o numero de linhas afetadas pela ultima  instruções SQL
        public function totalResultados(){
            return $this->stmt->rowCount();
        }

        public function ultimoIdInserido(){
            return $this->dbh->lastInsertId();
        }
    }
  
?>