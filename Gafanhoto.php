<?php 
require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa{
        //ATRIBUTOS
        private $login;
        private $totAssistido;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                     
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getLogin(){
            return $this ->login;
        }
        public function getTotAssistido(){
            return $this ->totAssistido;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setLogin($lo){
            $this ->login = $lo;
        }
        public function setTotAssistido($tot){
            $this ->totAssistido = $tot;
        }
         
        //MÉTODOS:

               
        public function ganharExp(){

        }
        public function viuMaisUm() {
             
        }
        
                
    }
?>