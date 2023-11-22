<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Canciones</title>
</head>

<body>
    <main class="container">
        <h1>Lista de canciones</h1>
        <article data-theme="dark">
            <form method="post">
                <label for="titulo">
                    <input type="text" name="titulo" placeholder="TItulo de la cancion" required>
                </label>
                <label for="genero">
                    <input type="text" name="genero" placeholder="Genero de la cancion">
                </label>
                <label for="autor">
                    <input type="text" name="autor" placeholder="Autor">
                </label>
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

        <?php
        require "./clases/Cancion.php";

        if (isset($_POST['titulo'], $_POST['genero'], $_POST['autor'])) {
            $cancion = new Cancion($_POST['titulo'], $_POST['genero']);
            $cancion->set_autor($_POST['autor']);

            //Mostrar info
            echo $cancion->mostrar_propiedades();
            echo $cancion->get_autor();
        }

        ?>
    </main>
</body>

</html>