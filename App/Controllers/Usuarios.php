<?php

    class Usuarios extends Controller
    {
        public function cadastrar(){

            $formulario = filter_input_array(
                INPUT_POST,[
                    'nome'=>FILTER_SANITIZE_SPECIAL_CHARS,
                    'email'=>FILTER_SANITIZE_EMAIL,
                    'senha'=>FILTER_DEFAULT,
                    'confirma-senha'=>FILTER_DEFAULT
                ]);
                
            $this->view("usuario/cadastro");
        }
    }
?>