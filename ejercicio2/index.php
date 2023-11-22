<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Calculadora</title>
</head>

<body>
    <main class="container">
        <h1>Calculadora basica</h1>
        <article data-theme="dark">
            <form method="post">
                <label for="operando1">
                    <input type="number" name="operando1" placeholder="Primer operador" required>
                </label>
                <label for="operando2">
                    <input type="number" name="operando2" placeholder="Segundo operador" id="op2">
                </label>
                <div class="grid">
                    <div>
                        <input type="radio" name="op" value="sumar" id="sumar" checked/>
                        <label for="sumar">Sumar</label>
                    </div>
                    <div>
                        <input type="radio" name="op" value="restar" id="restar"/>
                        <label for="restar">Restar</label>
                    </div>
                    <div>
                        <input type="radio" name="op" value="multiplicar" id="multiplicar"/>
                        <label for="multiplicar">Multiplicar</label>
                    </div>
                    <div>
                        <input type="radio" name="op" value="division" id="division"/>
                        <label for="division">Division</label>
                    </div>
                    <div>
                        <input type="radio" name="op" value="potencia" id="potencia"/>
                        <label for="potencia">Potencia</label>
                    </div>
                    <div>
                        <input type="radio" name="op" value="fact" id="fact"/>
                        <label for="fact">Factorial</label>
                    </div>
                </div>
                <script>
                    let op2Input = document.getElementById('op2');

                    document.getElementById('fact').addEventListener('click', function(e){op2Input.disabled = true;})
                    document.getElementById('sumar').addEventListener('click', function(e){op2Input.disabled = false;})
                    document.getElementById('restar').addEventListener('click', function(e){op2Input.disabled = false;})
                    document.getElementById('multiplicar').addEventListener('click', function(e){op2Input.disabled = false;})
                    document.getElementById('division').addEventListener('click', function(e){op2Input.disabled = false;})
                    document.getElementById('potencia').addEventListener('click', function(e){op2Input.disabled = false;})

                </script>
                <br>
                <div class="grid">
                    <div>
                        <button type="submit">Realizar operacion</button>
                    </div>
                   
                </div>
            </form>
        </article>
        
        <?php
            require "./clases/Calculadora.php";

            if(isset($_POST['operando1'], $_POST['operando2'])){
                $calculadora = new Calculadora($_POST['operando1'], $_POST['operando2']);
    
                if($_POST['op'] == 'sumar'){
                    echo $calculadora->sumar();
                }elseif($_POST['op'] == 'restar'){
                    echo $calculadora->restar();
                }elseif($_POST['op'] == 'multiplicar'){
                    echo $calculadora->multiplicar();
                }elseif($_POST['op'] == 'division'){
                    echo $calculadora->dividir();
                }elseif($_POST['op'] == 'potencia'){
                    echo $calculadora->potenciar();
                }else{
                    echo $calculadora->error();
                }
            }
 
            if(isset($_POST['op'])){
                $calculadora2 = new Calculadora($_POST['operando1']);
                if($_POST['op'] == 'fact'){
                    echo $calculadora2->factorial($_POST['operando1']);
                }else{
                    echo " ";
                }
            }
        ?>
    </main>

</body>

</html>