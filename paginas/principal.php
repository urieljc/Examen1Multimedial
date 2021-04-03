<?php  include "../templates/header.php";
    include "../templates/menu.php";
?>
<div id="cuerpo">
<p>  Bienvenido UsuarioS - Categoria </p> 
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
<label for="colores">Color de Fondo</label>
<select name="colores" id="colores">
    <option value=""></option>
    <option value="">Rojo</option>
    <option value="">Azul</option>
    <option value="">Verde</option>
</select>
</div>

<?php include "../templates/footer.php";?>

    