<?php 
    class Cancion{
        public $titulo;
        public $genero;
        private $autor;

        //Constructor de clase
        public function __construct($titulo, $genero){
            $this->titulo = $titulo;
            $this->genero = $genero;
        }
        
        public function get_autor(){
            return "<p>Autor: $this->autor</p>";
        }

        public function set_autor($autor){
            return $this->autor = $autor;
        }

        //Imprimir valores
        public function mostrar_propiedades(){
            return "<h2>Informacion de la cancion</h2>
                <p>Titulo: $this->titulo</p>
                <p>Genero: $this->genero</p>";
        }    
        
    }

?>