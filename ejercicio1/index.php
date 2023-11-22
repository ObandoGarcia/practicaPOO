<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Generador de paginas</title>
</head>

<body>
    <main class="container">
        <h1>Personaliza tu web</h1>

        <article data-theme="dark">
            <form method="post">
                <label for="titulo">
                    <input type="text" name="titulo" placeholder="Ingresa el titulo de la pagina" required>
                </label>
                <label for="fuente">
                    <input type="text" name="color" placeholder="Ingresa el color de la pagina" required>
                </label>
                <label for="fuente">
                    <input type="text" name="fuente" placeholder="Ingresa la fuente de la pagina" required>
                </label>
                <label for="posicion">Posicion del titulo</label>
                    <select name="posicion">
                        <option value=" " selected>Selecione una opcion...</option>
                        <option value="Izquierdo">Izquierdo</option>
                        <option value="Centro">Centro</option>
                        <option value="Derecha">Derecha</option>  
                    </select>
                <div class="grid">
                    <div>
                        <button type="submit">Guardar informacion</button>
                    </div>
                    <div>
                        <button type="reset">Limpiar campos</button>
                    </div>
                </div>
            </form>
        </article>

        <h2>Informacion basica de la pagina a crear</h2>
        <?php
        require "./clases/Cabecera.php";
        
        //Enviar informacion
        if (isset($_POST['titulo'], $_POST['color'], $_POST['fuente'],  $_POST['posicion'])) {
            $cabecera = new Cabecera($_POST['titulo'], $_POST['color'], $_POST['fuente']);

            $cabecera->set_posicion($_POST['posicion']);

            //Obtener informacion
            echo $cabecera->obtener_propiedades();

            echo $cabecera->get_posicion();
        }
        ?>
    </main>

</body>

</html>