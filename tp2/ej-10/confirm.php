<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Confirmación</title>
    <style>
        table{
            background-color: #E4E4E4;
            color: black;
        }
    </style>
</head>
<body>
    <h3>Confirmación de datos</h3>
    <?php
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        $fecha = $_POST['fecha'];
        $sexo = $_POST['sexo'];
        $aficiones = $_POST['aficiones'];

        //echo "nombre: $nombre <br> Dirección: $direccion <br> correo: $correo <br> Contraseña: $contrasenia <br>
        //fecha: $fecha <br> sexo: $sexo <br> ";
        echo "<table border=2>";
        echo "<tr>"; echo "<td> <b>Nombre </b> </td> "; echo "<td> $nombre </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Dirección </b> </td> "; echo "<td> $direccion </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Correo electrónico </b> </td> "; echo "<td> $correo </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Contraseña </b> </td> "; echo "<td> $contrasenia </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Fecha de nacimiento </b> </td> "; echo "<td> $fecha </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Sexo: </b> </td> "; echo "<td> $sexo </td> "; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Intreses: </b> </td> "; echo "<td>";
        if (!empty($_POST['interes'])) {
            $intereses = $_POST['interes'];
            foreach ($intereses as $key => $value) {
                echo "$value  ";
            }
        }else{
            echo "Vacio";
        }
        echo "</td>"; echo "</tr>";
        echo "<tr>"; echo "<td> <b>Aficiones: </b> </td> "; echo "<td> $aficiones </td> "; echo "</tr>";
        echo "<tr> <td> <button name=confirmar id=confirm onclick=confirmar();>Confirmar </button> </td> </tr>";
        echo "</table>";
        //echo "<br> Aficiones: $aficiones <br>";
    ?>
    <script>
        function confirmar(){
            alert("Los datos han sido confirmados");
        }
    </script>
</body>
</html>