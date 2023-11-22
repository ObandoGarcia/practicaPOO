<?php
    class Calculadora{
        public $operando1;
        public $operando2;

        //Metodo constructor
        public function __construct($operando1, $operando2 = null){
            $this->operando1 = $operando1;
            $this->operando2 = $operando2;
        }

        public function sumar(){ 
            $suma = $this->operando1 + $this->operando2;
            return "<article data-theme='dark'>
                <header>Suma de los numeros ingresados</header>  
                <p>$suma</p>               
            </article>";
        }

        public function restar(){ 
            $resta = $this->operando1 - $this->operando2;
            return "<article data-theme='dark'>
                <header>Diferencia de los numeros ingresados</header>  
                <p>$resta</p>               
            </article>";
        }

        public function multiplicar(){ 
            $multiplicar = $this->operando1 * $this->operando2;
            return "<article data-theme='dark'>
                <header>Producto de los numeros ingresados</header>  
                <p>$multiplicar</p>               
            </article>";
        }

        public function dividir(){ 
            $division = $this->operando1 / $this->operando2;
            return "<article data-theme='dark'>
                <header>Cociente de los numeros ingresados</header>  
                <p>$division</p>               
            </article>";
        }

        public function potenciar(){
            $potencia = pow($this->operando1, $this->operando2);
            return "<article data-theme='dark'>
                <header>Resultado de la potencia</header>  
                <p>$potencia</p>               
            </article>";
        }
    
        public function factorial($numero){
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial = $factorial * $i;
        }
        return "<article data-theme='dark'>
                <header>Factorial del numero ingresado</header>  
                <p>$factorial</p>               
            </article>";       
        }
        
        public function error(){
            return "<article data-theme='dark'>
            <header>Mensaje de error</header>  
            <p>Los valores introducidos no correspondes a valores validos para operar</p>               
            </article>";
        }
            
    }

?>