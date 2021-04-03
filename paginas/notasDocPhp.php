<?php include "../templates/header.php";
include "../templates/menu.php";
include "../config.php";
require_once  "datos.php";
session_start();

$ci = $_SESSION["ci"];
$rol = $_SESSION["rol"];


if (isset($ci)) {

?>
    <div style="margin-left: 190px;" >

        <div id="carrera">
            <h2>Notas del Docente - PHP</h2>
            <?php
            if ($rol == 'docente') {
                //echo $ci;
                //echo $rol;
                $datos = "SELECT P.DEPARTAMENTO, N.SIGLA, N.NotaFinal FROM PERSONA P INNER JOIN NOTAS N ON P.CI=N.CI";
                $resultado = mysqli_query($con, $datos);
                $filas = mysqli_num_rows($resultado);
                $columnas = mysqli_num_fields($resultado);
                $ret = mysqli_fetch_array($resultado);
                // echo $filas;
                // echo " ";
                // echo $columnas;
                // echo " ";
                           
                while ($filas1= mysqli_fetch_row($resultado)){
                    //echo "<td>" . $filas1[0] . "</td>";
                    if($filas1[0]==1){
                        $materiaChu[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==2){
                        $materiaLapaz[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==3){
                        $materiaCocha[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==4){
                        $materiaOruro[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==5){
                        $materiaPotosi[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==6){
                        $materiaTarija[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==7){
                        $materiaSantaCruz[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==8){
                        $materiaBeni[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }
                    if($filas1[0]==9){
                        $materiaPando[]=array('materia'=>$filas1[1],
                                            'nota'=>$filas1[2]);
                        
                    }

                }
                
                foreach($materiaChu as $row){
                    
                    //echo 'materia '.$row['materia'].' nota '.$row['nota'];
                    $sigla[]=$row['materia'];
                }
                foreach($materiaLapaz as $row){
                    
                    //echo 'materia '.$row['materia'].' nota '.$row['nota'];
                    $sigla[]=$row['materia'];
                }
                foreach($materiaCocha as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaOruro as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaPotosi as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaTarija as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaSantaCruz as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaBeni as $row){
                    $sigla[]=$row['materia'];
                }
                foreach($materiaPando as $row){
                    $sigla[]=$row['materia'];
                }
                $siglaUni=array_unique($sigla);
                foreach($siglaUni as $s){
                    //echo $s;
                }
                
                
            ?>
                <h2>Usted es Docente </h2>
                <br>
                <br>
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
                    <?php  
                         foreach($siglaUni as $s){
                            echo "<tr>";       
                            echo "<td>" . $s . "</td>";
                            //chuquisaca
                            $media=0;
                            $notaDup=array();
                            foreach($materiaChu as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //la paz
                            $media=0;
                            $notaDup=array();
                            foreach($materiaLapaz as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //cochabamba
                            $media=0;
                            $notaDup=array();
                            foreach($materiaCocha as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //oruro
                            $media=0;
                            $notaDup=array();
                            foreach($materiaOruro as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //potosi
                            $media=0;
                            $notaDup=array();
                            foreach($materiaPotosi as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //tarija
                            $media=0;
                            $notaDup=array();
                            foreach($materiaTarija as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //santa cruz
                            $media=0;
                            $notaDup=array();
                            foreach($materiaSantaCruz as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //beni
                            $media=0;
                            $notaDup=array();
                            foreach($materiaBeni as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            //pando
                            $media=0;
                            $notaDup=array();
                            foreach($materiaPando as $row){
                    
                                if($s==$row['materia']){
                                    $notaDup[]=$row['nota'];
                                }
                            }
                            
                            if(array_sum($notaDup)==0){
                                $media=0;
                            }else{
                                $media=intdiv(array_sum($notaDup),count($notaDup)) ;
                            }
                            echo "<td>" . $media . "</td>";
                            echo "</tr>";     
                                }
                    ?>
                        
                   
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



//include "../templates/footer.php"; ?>