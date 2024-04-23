<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="header h1">
            <h1>Biblioteca<br></h1>
            <h2>Datos de un libro<br></h2>
        </div>
    </header>

    <div class="container">
        <!-- Aquí comienza el formulario -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="row g-4 mt-3">
            <div class="col-6">
                <label for="libroInput" class="form-label">Autor</label>
                <input type="text" class="form-control" id="libroInput" name="libro" required pattern="[A-Za-z\s]{1,}">
            </div>

            <div class="col-6">
                <label for="tituloInput" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="tituloInput" name="titulo" required>
            </div>

            <div class="col-6">
                <label for="edicionInput" class="form-label">Edicion</label>
                <input type="text" class="form-control" id="edicionInput" name="edicion" required>
            </div>

            <div class="col-6">
                <label for="lugarInput" class="form-label">Lugar de Edicion</label>
                <input type="text" class="form-control" id="lugarInput" name="lugar" required>
            </div>

            <div class="col-8">
                <label for="editorialInput" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorialInput" name="editorial" required>
            </div>

            <div class="col-4">
                <label for="añoInput" class="form-label">Año de Edicion</label>
                <input type="date" class="form-control" id="añoInput" name="año" required>
            </div>

            <div class="col-4">
                <label for="paginasInput" class="form-label">Numero de Paginas</label>
                <input type="number" class="form-control" id="paginasInput" name="paginas" required>
            </div>

            <div class="col-4">
                <label for="isbnInput" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbnInput" name="isbn" required pattern="[0-9]{13}">
            </div>

            <div class="col-12">
                <label for="notasInput" class="form-label">Notas</label>
                <input type="text" class="form-control" id="notasInput" name="notas">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="Enviar">Ingresar Libro</button>
            </div>
        </form>
        <!-- Aquí termina el formulario -->
    </div>

    <?php

    session_start();

    class Libro
    {
        public $libro;
        public $titulo;
        public $edicion;
        public $lugar;
        public $editorial;
        public $año;
        public $paginas;
        public $isbn;
        public $notas;

        public function __construct($libro, $titulo, $edicion, $lugar, $editorial, $año, $paginas, $isbn, $notas)
        {
            $this->libro = $libro;
            $this->titulo = $titulo;
            $this->edicion = $edicion;
            $this->lugar = $lugar;
            $this->editorial = $editorial;
            $this->año = $año;
            $this->paginas = $paginas;
            $this->isbn = $isbn;
            $this->notas = $notas;
        }
    }

    function agregar_libro($libro)
    {
        if (!isset($_SESSION['libros'])) {
            $_SESSION['libros'] = array();
        }
        array_push($_SESSION['libros'], $libro);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenemos los datos del formulario
        $libro = $_POST["libro"];
        $titulo = $_POST["titulo"];
        $edicion = $_POST["edicion"];
        $lugar = $_POST["lugar"];
        $editorial = $_POST["editorial"];
        $año = $_POST["año"];
        $paginas = $_POST["paginas"];
        $isbn = $_POST["isbn"];
        $notas = $_POST["notas"];

        // Creamos un nuevo objeto Libro con los datos del formulario
        $nuevo_libro = new Libro($libro, $titulo, $edicion, $lugar, $editorial, $año, $paginas, $isbn, $notas);
        
        // Agregamos el nuevo libro al array de libros
        agregar_libro($nuevo_libro);
    }

    ?>

    <?php if (isset($_SESSION['libros'])): ?>
        <?php foreach ($_SESSION['libros'] as $libro): ?>
            <table class='table '>
                <tr>
                    <td>Nombre Autor:</td>
                    <td><?php echo $libro->libro; ?></td>
                </tr>
                <tr>
                    <td>Titulo Libro:</td>
                    <td><?php echo $libro->titulo; ?></td>
                </tr>
                <tr>
                    <td>Lugar de Edicion:</td>
                    <td><?php echo $libro->edicion; ?></td>
                </tr>
                <tr>
                    <td>Lugar:</td>
                    <td><?php echo $libro->lugar; ?></td>
                </tr>
                <tr>
                    <td>Editorial:</td>
                    <td><?php echo $libro->editorial; ?></td>
                </tr>
                <tr>
                    <td>Año de publicacion:</td>
                    <td><?php echo $libro->año; ?></td>
                </tr>
                <tr>
                    <td>Numero de paginas:</td>
                    <td><?php echo $libro->paginas; ?></td>
                </tr>
                <tr>
                    <td>ISBN:</td>
                    <td><?php echo $libro->isbn; ?></td>
                </tr>
                <tr>
                    <td>Notas:</td>
                    <td><?php echo $libro->notas; ?></td>
                </tr>
            </table>
        <?php endforeach; ?>
    <?php endif; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
