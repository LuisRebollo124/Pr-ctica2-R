<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
</head>
<body>
    <main>
        <header><h1>Votación de la mejor película</h1></header>
        <article>
            <form action="segunda.php" method="get">
                <label for="peli1">Todo a la vez en todas partes</label>
                <input type="number" value=""id="pelicula1" name="peli1">
                <label for="peli2">Sin novedad en el frente</label>
                <input type="number" value="" id="pelicula2" name="peli2">
                <label for="peli3">Almas en pena de Inisherin</label>
                <input type="number" value="" id="peli3" name="peli3">
                <button type="submit">Votar</button>
            </form>
            <form action="borrar.php">
                <button type="submit" >Borrar</button>
            </form>
        </article id="error">
        <article>

        </article>
    </main>
</body>
</html>