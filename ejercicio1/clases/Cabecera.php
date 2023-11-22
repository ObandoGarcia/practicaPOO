<?php 
    class Cabecera{
        public $titulo;
        public $color;
        public $fuente_pagina;
        private $posicion;

    //Constructor
    public function __construct($titulo, $color, $fuente_pagina){
        $this->titulo = $titulo;
        $this->color =$color;
        $this->fuente_pagina = $fuente_pagina;
    }

    public function obtener_propiedades(){
        return "<article data-theme='dark'>  
                <p>Titulo: $this->titulo</p>
                <p>Color: $this->color</p>
                <p>Fuente de la pagina: $this->fuente_pagina</p>
        </article>";
    }

    public function set_posicion($posicion){
        $this->posicion = $posicion;
    }

    public function get_posicion(){
        return "<article data-theme='dark'>  
            <p>La posicion del titulo es </p>
            <p>$this->posicion</p>   
        </article>";
    }

    }
?>
