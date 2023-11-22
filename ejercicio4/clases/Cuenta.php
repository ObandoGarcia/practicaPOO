<?php
    class Cuenta{
        public $nombre;
        public $cantidad;
        public $tipo;
        public $numero;

        //Constructor de clase
        public function __construct($nombre, $cantidad, $tipo, $numero){
            $this->nombre = $nombre;
            $this->cantidad = $cantidad;
            $this->tipo = $tipo;
            $this->numero = $numero;
        }
        
        public function mostrar_datos(){
            return "<p>Nombre: $this->nombre</p>
                <p>Tipo de cuenta: $this->tipo</p>
                <p>Numero de cuenta: $this->numero</p>";
        }

        public function depositar($cantidad){
            if($cantidad < 5){
                return "<p>El valor depositado debe ser mayor a $5</p>";
            }else{
                return "<p>El deposito se ha realizado correctamente.</p>";
            }
        }
           
        public function retirar($valor){        
            if($valor > $this->cantidad || $valor < 5){
                return "<p>No tienes suficientes fondos para realizar el retiro</p>";
            }else{
                $this->cantidad = $this->cantidad - $valor;
                return "<p>Retiraste correctamente $ $valor y te quedan $ $this->cantidad</p>";
            }
        }
        
    }
?>