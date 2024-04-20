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
            "basico" => 
            array("ingles"=> 25, "frances" => 10, "mandarin" => 8, "ruso" =>12, "portugues" => 30, "japones" => 90),
            "intermedio" => 
            array("ingles"=> 15, "frances" => 5, "mandarin" => 4, "ruso" => 8, "portugues" => 15, "japones" => 25),
            "avanzado" => 
            array("ingles"=> 10, "frances" => 2, "mandarin" => 1, "ruso" => 4, "portugues" => 10, "japones" => 67)
        );

        $idioma = $_POST["opcion_idioma"];

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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["ingles"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["ingles"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["ingles"]).'</td>';
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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["frances"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["frances"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["frances"]).'</td>';
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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["mandarin"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["mandarin"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["mandarin"]).'</td>';
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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["ruso"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["ruso"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["ruso"]).'</td>';
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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["portugues"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["portugues"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["portugues"]).'</td>';
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
                            echo'<td align = "center" style="background-color: #43B75A;">'.strval($matriz_estudiantes["basico"]["japones"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #4366B7;">Intermedio </th>';
                            echo'<td align = "center" style="background-color: #4366B7;">'.strval($matriz_estudiantes["intermedio"]["japones"]).'</td>';
                        echo'</tr>';
                        echo'<tr>';
                            echo'<th scope="row" style="background-color: #B743A0;">Avanzado </th>';
                            echo'<td align = "center" style="background-color: #B743A0;">'.strval($matriz_estudiantes["avanzado"]["japones"]).'</td>';
                        echo'</tr>';
                    echo'</tbody>';
                echo'</table>';
                echo'<a href= "index.html">Regresar al menú principal</a>';
            break;
        }
    ?>
</body>
</html>