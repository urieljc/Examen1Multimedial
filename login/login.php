
<center>
<div id="login" >
<h1>Ingreso</h1>

    <form action="index.php" method="POST">
   <div> 
       <label for="nombre">Usuario</label>
       <br>
        <input type="text" name="usuario" id="usuario">
    </div>
    <div>
        <label for="clave">Clave</label>
        <br>
        <input type="text" name="clave" id="clave">
    </div>
    <div>
        <input type="submit" value="Aceptar">
        <!-- <a href="paginas/principal.php">Aceptar</a>
        <input type="button" value="Cancelar"> -->
    </div>
</form>


</div>

</center>
 <?php
    if($_POST){
        session_start();
        
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $datos= "SELECT CI FROM USUARIO WHERE USUARIO = '$usuario' AND PASSWORD = '$clave'";
        $resultado = mysqli_query($con, $datos);
        $filas=mysqli_num_rows($resultado);
        
        if($filas!=0){
            $ret=mysqli_fetch_array($resultado);
            $ci=$ret['CI'];
            $_SESSION["ci"]=$ret['CI'];
            echo "Usuario encontrado".$_SESSION["ci"];
             header("location:paginas/principal.php");
        }
        else{
            //echo "usario o password Invalidos";
        }
    }


?>