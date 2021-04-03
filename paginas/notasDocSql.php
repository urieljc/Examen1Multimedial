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
    <div style="margin-left: 190px;" >

        <div >
            <h2>Notas del Docente - SQL</h2>
            <?php
            if ($rol == 'docente') {
                //echo $ci;
                //echo $rol;
                $datos = "SELECT N.SIGLA,(SUM(CASE WHEN P.DEPARTAMENTO ='01' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='01' THEN 1 ELSE 0 END )) CH,
                (SUM(CASE WHEN P.DEPARTAMENTO ='02' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='02' THEN 1 ELSE 0 END )) LP,
                (SUM(CASE WHEN P.DEPARTAMENTO ='03' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='03' THEN 1 ELSE 0 END )) CB,
                (SUM(CASE WHEN P.DEPARTAMENTO ='04' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='04' THEN 1 ELSE 0 END )) oru,
                (SUM(CASE WHEN P.DEPARTAMENTO ='05' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='05' THEN 1 ELSE 0 END )) PT,
                (SUM(CASE WHEN P.DEPARTAMENTO ='06' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='06' THEN 1 ELSE 0 END )) TJ,
                (SUM(CASE WHEN P.DEPARTAMENTO ='07' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='07' THEN 1 ELSE 0 END )) SC,
                (SUM(CASE WHEN P.DEPARTAMENTO ='08' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='08' THEN 1 ELSE 0 END )) BE,
                (SUM(CASE WHEN P.DEPARTAMENTO ='09' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='09' THEN 1 ELSE 0 END )) PD
                 FROM PERSONA P INNER JOIN NOTAS N ON P.CI=N.CI GROUP BY N.SIGLA";
                $resultado = mysqli_query($con, $datos);
                $filas = mysqli_num_rows($resultado);
                $columnas = mysqli_num_fields($resultado);
                $ret = mysqli_fetch_array($resultado);
                //echo $filas;
                //echo $columnas;
            ?>
                <h2>Usted es  Docente</h2>
                <br>
                <br>
                <table id="notasE" border="1px solid blanck">
                    <tr>
                    <table id="notasE" border="1px solid blanck">
                    <tr>
                        <th style="background-color: #4CAF50;
  color: white;">Sigla</th>
                        <th style="background-color: #4CAF50;
  color: white;">CH.</th>
                        <th style="background-color: #4CAF50;
  color: white;">LP</th>
                        <th style="background-color: #4CAF50;
  color: white;">CB</th>
                        <th style="background-color: #4CAF50;
  color: white;">OR</th>
                        <th style="background-color: #4CAF50;
  color: white;">PT</th>
                        <th style="background-color: #4CAF50;
  color: white;">TJ</th>
                        <th style="background-color: #4CAF50;
  color: white;">SC</th>
                        <th style="background-color: #4CAF50;
  color: white;">BE</th>
                        <th style="background-color: #4CAF50;
  color: white;">PD</th>
                    </tr>
                    <tr>
                        <?php
                        while ($filas1 = mysqli_fetch_row($resultado)) {
                            //print_r($fila);
                            echo "<tr>";
                            echo "<td>" . $filas1[0] . "</td>";
                            echo "<td>" . $filas1[1] . "</td>";
                            echo "<td>" . $filas1[2] . "</td>";
                            echo "<td>" . $filas1[3] . "</td>";
                            echo "<td>" . $filas1[4] . "</td>";
                            echo "<td>" . $filas1[5] . "</td>";
                            echo "<td>" . $filas1[6] . "</td>";
                            echo "<td>" . $filas1[7] . "</td>";
                            echo "<td>" . $filas1[8] . "</td>";
                            echo "<td>" . $filas1[9] . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tr>
                </table>
            <?php
            } else {
            ?>
                <h2>Usted no es Docente</h2>
            <?php
            }
            ?>
        </div>
    </div>



<?php
}



include "../templates/footer.php"; ?>