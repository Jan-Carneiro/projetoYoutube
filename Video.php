<?php 
require_once 'AcoesVideo.php';

    class Video implements AcoesVideo{
        //ATRIBUTOS
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct($ti){
           
            $this->titulo = $ti;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;

        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getTitulo(){
            return $this ->titulo;
        }
        public function getAvaliacao(){
            return $this ->avaliacao;
        }
        public function getViews(){
            return $this ->views;
        }
        public function getCurtidas(){
            return $this ->curtidas;
        }
        public function getReproduzindo(){
            return $this ->reproduzindo;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setTitulo($titulo){
            $this ->titulo = $titulo;
        }
        public function setAvaliacao($avaliacao){
            $media = ($this -> avaliacao + $avaliacao)/$this -> views;
            $this -> avaliacao = $media;
        }
        public function setViews($views){
            $this ->views = $views;
        }
        public function setCurtidas($curtidas){
            $this ->curtidas = $curtidas;
        }
        public function setReproduzindo($reproduzindo){
            $this ->reproduzindo = $reproduzindo;
        }
         
        //MÉTODOS:

        public function play(){
            $this -> reproduzindo = true;
        }

        public function pause(){
            $this -> reproduzindo = false;
        }

        public function like(){
            $this -> curtidas ++;
        }       
        
               
                
    }
?>