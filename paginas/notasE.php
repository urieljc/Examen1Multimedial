<?php include "../templates/header.php";
include "../templates/menu.php";
include "../config.php";
require_once  "datos.php";
session_start();

$ci = $_SESSION["ci"];
$rol = $_SESSION["rol"];
//$persona=new modelo;
//echo $persona->getCi();
//$rol=$persona->getRol();

if (isset($ci)) {

?>
    <div id="cuerpo">

        <div id="carrera">
            <h2>Notas del Estudiante</h2>
            <?php
            if ($rol == 'estudiante') {
                //echo $ci;
                //echo $rol;
                $datos = "SELECT U.CARRERA,N.SIGLA,N.Nota1,N.Nota2,N.Nota3,N.NotaFinal FROM USUARIO U INNER JOIN NOTAS N ON U.CI=N.CI WHERE U.CI='$ci'";
                $resultado = mysqli_query($con, $datos);
                $filas = mysqli_num_rows($resultado);
                $columnas=mysqli_num_fields($resultado);
                $ret = mysqli_fetch_array($resultado);
                //echo $filas;
                //echo $columnas;
            ?>
                <h2>Usted es estudiante de <?php echo $ret['CARRERA']   ?></h2>
                <br>
                <br>
                <table id="notasE" border="1px solid blanck" >
                    <tr>
                        <th style="background-color: #4CAF50;
  color: white;">Sigla</th>
                        <th style="background-color: #4CAF50;
  color: white;">Nota 1</th>
                        <th style="background-color: #4CAF50;
  color: white;">Nota 2</th>
                        <th style="background-color: #4CAF50;
  color: white;">Nota 3</th>
                        <th style="background-color: #4CAF50;
  color: white;">Nota Final</th>
                    </tr>
                    <tr >
                        <?php
                        while ($filas1 = mysqli_fetch_row($resultado)) {
                            //print_r($fila);
                            echo "<tr>";
                            echo "<td>" . $filas1[1] . "</td>";
                            echo "<td>" . $filas1[2] . "</td>";
                            echo "<td>" . $filas1[3] . "</td>";
                            echo "<td>" . $filas1[4] . "</td>";
                            echo "<td>" . $filas1[5] . "</td>";
                            
                            echo "</tr>";
                        }
                        ?>
                    </tr>
                </table>
            <?php
            } else {
            ?>
                <h2>Usted no es Estudiante</h2>
            <?php
            }
            ?>
        </div>
    </div>



<?php
}



include "../templates/footer.php"; ?>