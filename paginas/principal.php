<?php  include "../templates/header.php";
    include "../templates/menu.php";
    include "../config.php";
    require_once  "datos.php";
    session_start();
    if(isset($_SESSION["ci"])){
    

    //codigo para sacar el nombre
    $ci= $_SESSION["ci"]  ;
    $datos= "SELECT P.NOMBRE, P.APELLIDO,U.ROL FROM USUARIO U, PERSONA P WHERE P.CI=U.CI AND U.CI='$ci'";
    $resultado = mysqli_query($con, $datos);
    $filas=mysqli_num_rows($resultado);
    $ret=mysqli_fetch_array($resultado);
    $nombre=$ret['NOMBRE'];
    $apellido=$ret['APELLIDO'];
    $rol=$ret['ROL'];
    $_SESSION["rol"]=$rol;
    $persona=new modelo;
    $persona->almacenar($ci,$nombre,$apellido,$rol);

?>
<div id="cuerpo">
<p>  Bienvenido <?php echo $nombre." ".$apellido." - ".$rol;      
      ?>  </p> 
      
    
<div id="carrera">
    <h2>Seleccione la Carrera</h2>
    <div>
        <a href="carreras/fisica.php">Fisica</a>
        <a href="carreras/quimica.php">Quimica</a>
        <a href="carreras/matematica.php">Matematicas</a>
        <a href="carreras/informatica.php">Informatica</a>
    </div>
</div>
<br>
<br>
<form action="">
<label for="colores">Color de Fondo</label>
<select name="colores" id="colores">
    <option value=""></option>
    <option value="">Rojo</option>
    <option value="">Azul</option>
    <option value="">Verde</option>
</select>
<input type="submit" value="Aceptar">
</form>
<br>

<a href="../salir.php">Salir</a>
</div>

<?php include "../templates/footer.php";
    }
    else{
        header("location:../index.php");
    }


?>

    