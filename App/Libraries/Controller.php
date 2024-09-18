<?php
class Controller{
    public function model($model){
     require_once '../app/Models/'.$model.'.php';
     return new $model;
    }
    
    public function view($view, $dados = []){
         $arquivo = ('../app/Views/'.$view.'.php');
         if(file_exists($arquivo)){
        require_once $arquivo;
         }else{
         die("O arquivo não existe");
        }
    }
}
/* O (Controller.php) é responsável por abrir/ renderizar as páginas da 
pasta views. AS instruçoes, por exemplo, da url são execultadas em outros arquivos 
que são mandados para o (Controller.php).
*/
?>
