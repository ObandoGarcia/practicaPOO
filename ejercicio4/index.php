<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Cuenta Bancaria</title>
</head>

<body>
    <main class="container">
        <h1>Cuenta bancaria</h1>
        
        <article data-theme="light">
            <form method="post">
                <h2>Depositar dinero en tu cuenta de banco</h2>
                <label for="nombre">
                    <input type="text" name="nombre" placeholder="Nombre del titular" required>
                </label>
                <label for="cantidad">
                    <input type="number" name="cantidad" placeholder="Cantidad de dinero" required min=0>
                </label>
                <label for="tipo">Tipo de cuenta</label>
                <select name="tipo" required>
                    <option value=" " selected>Selecione una opcion...</option>
                    <option value="ahorro">Cuenta de ahorro</option>
                    <option value="corriente">Cuenta de corriente</option>
                </select>
                <label for="numero">
                    <input type="text" name="numero" placeholder="Numero de la cuenta" required>
                </label>
                <h2>Retirar dinero en tu cuenta de banco</h2>
                <label for="cantidad">
                    <input type="number" name="cantidad2" placeholder="Retirar dinero" required min=0>
                </label>
                <div class="grid">
                    <div>
                        <button type="submit">Procesar informacion</button>
                    </div>
                    <div>
                        <button type="reset">Limpiar campos</button>
                    </div>
                </div>
            
            </form>
        </article>
        <article data-theme="light">
            <header>Datos de la cuenta</header>
            <?php 
                require "./clases/Cuenta.php";

                if(isset($_POST['nombre'], $_POST['cantidad'], $_POST['tipo'], $_POST['numero'])){  
                    $cuenta = new Cuenta($_POST['nombre'], $_POST['cantidad'], $_POST['tipo'], $_POST['numero']);

                    //Deposita el dinero
                    echo $cuenta->depositar($_POST['cantidad']);

                    //Retira el dinero
                    echo $cuenta->retirar($_POST['cantidad2']);

                    //Mostrar datos
                    echo $cuenta->mostrar_datos();                        
                }
            ?>
        </article>
    </main>
</body>

</html>