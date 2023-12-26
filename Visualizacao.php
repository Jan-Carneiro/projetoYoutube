<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
    class Visualizacao{
        //ATRIBUTOS
        private $espectador;
        private $filme;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct($espectador,$filme){
            
            $this -> espectador = $espectador;
            $this -> filme = $filme;
            $this -> filme -> setViews($this->filme->getViews() + 1);//quando o objeto for criado, o atributo filme estará correlacionado com o atributo views, recebendo o atributo views + 1
            $this -> espectador -> setTotAssistido($this -> espectador -> getTotAssistido() + 1);//quando o objeto for criado, o atributo espectador estará correlacionado com o atributo totassistido, recebendo o atributo totassistido + 1                      
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getEspectador(){
            return $this ->espectador;
        }
        public function getFilme(){
            return $this ->filme;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setEspectador($espectador){
            $this ->espectador = $espectador;
        }
        public function setFilme($filme){
            $this ->filme = $filme;
        }
         
        //MÉTODOS:

               
        public function avaliar() {
            $this -> filme -> setAvaliacao (5);
                       
        }
        public function avaliarNota($nota) {
            $this -> filme -> setAvaliacao ($nota);
                       
        }
        public function avaliarPorc($porc) {
            $nova = 0; //nova nota começa com 0

            if($porc <= 20) {
                $nova = 3;
            }elseif($porc <= 50) {
                $nova = 5;
            }elseif($porc <= 90) {
                $nova = 8;
            }else{
                $nova = 10;
            }

            $this -> filme -> setAvaliacao ($nova);

        }
        
                
    }
?>