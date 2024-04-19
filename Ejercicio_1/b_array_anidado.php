<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        h2{
            text-align: center;
            color: black;
            background-color: lightblue;
            margin: 0%;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
        }

        thead{
            border-color: black;
            border-radius: 1px;
        }

        tr{
            border-color: black;
            border-radius: 1px;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $matriz_estudiantes = array(
        array(25,10,8,12,30,90), 
        array(15,5,4,8,15,25),   
        array(10,2,1,4,10,67)
    );

    $idioma = $_POST["opcion_idioma"];
    $opcion = $_POST["opcion_proceso"];
    $submit = $_POST["submit_boton"];
    
    switch($idioma){
        case"ingles":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma inglés</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][0]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][0]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][0]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;

        case"frances":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma francés</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][1]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][1]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][1]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;

        case"mandarin":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma mandarín</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][2]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][2]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][2]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;

        case"ruso":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma ruso</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][3]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][3]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][3]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;

        case"portugues":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma portugués</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][4]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][4]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][4]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;

        case"japones":
            echo '<br>';
            echo '<h1 align = center>Número de estudiantes por curso: </h1>';
            echo '<br>';                
            echo'<table class="table table-striped">';
                echo'<h2>Idioma japones</h2>';
                echo'<thead align = "center">';
                    echo'<tr>';
                        echo'<th scope="col" style="background-color: #B79443;">Nivel</th>';
                        echo'<th scope="col" style="background-color: #B79443;">Número de estudiantes</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody >';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #43B75A;">básico </th>';
                        echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes[0][5]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                        echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes[1][5]).'</td>';
                    echo'</tr>';
                    echo'<tr>';
                        echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                        echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes[2][5]).'</td>';
                    echo'</tr>';
                echo'</tbody>';
            echo'</table>';
            echo'<a href= "index.html">Regresar al menú principal</a>';
        break;
    }
    ?>
</body>
</html>