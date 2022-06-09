<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../proyectoFinal/css/comentario.css">
</head>
<body>    
    <header>
        <div class="header_logo">
            <img src = "img/portada.jpeg" src = "portada_principal">
        </div>
        <div class="header_nombre">
            <h1>DICCIONARIO GAMER</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="menu.html">Reseñas</a></li>
            <li><a href="conoce.html">Conocenos</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <form id="formulario">
            <br>
            <fieldset>
                <legend>Caja de comentarios y sugerencias </legend>
                <div class="form-field"> 
                    <label for="nombre"> Nombre: </label>
                    <input type="text" name="nombre" id="nombre" autocomplete="off" required>
                </div>
                <div class="form-field"> 
                    <label for="calificacion"> Calificación de la página: </label>
                    <input type="number" name="calificacion" id="calificacion" step="0.01" autocomplete="off" required>
                </div>
                <div class="form-field"> 
                    <label for="comentario"> Comentarios: </label>
                    <textarea name="comentario" id="comentario" cols="30" rows="10" required></textarea>
                </div>
                
                <div class="form-field">
                <input type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        Diccionario Gamer - Derechos Reservados 
    </footer>
    <script src="../proyectoFinalA/js/agregar.js" type="module"></script> 
</body>
</html>