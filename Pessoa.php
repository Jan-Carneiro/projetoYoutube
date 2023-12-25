<?php 

    abstract class Pessoa{
        //ATRIBUTOS
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;


        //MÉTODOS ESPECIAIS (construct, get, set)
        //CONSTRUCT
        public function __construct($no, $id, $se){
            $this->nome = $no;
            $this->idade = $id;
            $this->sexo = $se;
            $this->experiencia = 0;
        }
                
        //GET (fazer a correlação do GET com seus atributos)
        public function getNome(){
            return $this ->nome;
        }
        public function getIdade(){
            return $this ->idade;
        }
        public function getSexo(){
            return $this ->sexo;
        }
        public function getExperiencia(){
            return $this ->experiencia;
        }
                        
        //SET (interligar o atributo com o seu parâmetro)
        public function setNome($no){
            $this ->nome = $no;
        }
        public function setIdade($id){
            $this ->idade = $id;
        }
        public function setSexo($se){
            $this ->sexo = $se;
        }
        public function setExperiencia($ex){
            $this ->experiencia = $ex;
        }
                 
        //MÉTODOS:

        protected function ganharExp($n){
            $this -> experiencia += $n; //adicionará ao atributo experiencia o atributo $n
        }       
        
        
        
                
    }
?>



