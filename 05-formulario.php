<?php 

$Evaluar = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 

    $Evaluar = true;

    !empty($_POST['Registro']) ? $Registro = $_POST['Registro'] : $Registro = 'Campo no rellenado';
    !empty($_POST['Nombre']) ? $Nombre = $_POST['Nombre'] : $Nombre = 'Campo no rellenado';
    !empty($_POST['Direccion']) ? $Direccion = $_POST['Direccion'] : $Direccion = 'Campo no rellenado';
    $Paises = $_POST['Paises'];
    $Estado = $_POST['Estado'];
    !empty($_POST['Sexo']) ? $Sexo = $_POST['Sexo'] : $Sexo = 'Campo no seleccionado';
    !empty($_POST['Telefono']) ? $Telefono = $_POST['Telefono'] : $Telefono = 'Campo no rellenado';
    isset($_POST['Aficion1']) ? $Aficion1 = $_POST['Aficion1'] : $Aficion1 = 'Campo no seleccionado';
    isset($_POST['Aficion2']) ? $Aficion2 = $_POST['Aficion2'] : $Aficion2 = 'Campo no seleccionado';
    isset($_POST['Aficion3']) ? $Aficion3 = $_POST['Aficion3'] : $Aficion3 = 'Campo no seleccionado';
    !empty($_POST['Comentarios']) ? $Comentarios = $_POST['Comentarios'] : $Comentarios = 'Campo no rellenado';


}

include './includes/templates/header.php';

?>

<main>

<div class="contenedor">

<form class="form" method="POST">

    <fieldset>


    <legend class="legend">Registro de usuario</legend>

    <label class="label" for="Registro">Registro</label>
    <input name="Registro" class="input" id="Registro" type="number">

    <label class="label" for="Nombre">Nombre</label>
    <input name="Nombre" class="input" id="Nombre" type="text">

    <label class="label" for="Direccion">Direccion</label>
    <input name="Direccion" class="input" id="Direccion" type="text">

    <label class="label" for="Pais">Pais</label>

    <select class="input" name="Paises" id="Pais">

        <option value="México">México</option>
        <option value="España">España</option>
        <option value="Estados_Unidos">Estados Unidos</option>
    
    </select>

    <label class="label" for="Estado">Estado</label>
    <select class="input" name="Estado" id="Estado">

        <option value="Jalisco">Jalisco</option>
        <option value="Monterrey">Monterrey</option>
        <option value="Queretaro">Queretaro</option>

    </select>

    <label class="label" for="Fecha">Fecha de nacimiento</label>
    <input class="input" id="Fecha" name="Fecha" type="date">

    <label class="label" for="Sexo">Sexo</label>
    
    <input value="Hombre" name="Sexo" type="radio">
    <label>Hombre</label>

    <input value="Mujer" name="Sexo" type="radio">
    <label>Mujer</label>

    <label class="label" for="Telefono">Teléfono</label>
    <input name="Telefono" class="input" type="tel">

    <label class="label" for="Aficiones">Aficiones</label>

    <input value="Leer" name="Aficion1" type="checkbox">
    <label>Leer</label>

    <input value="Ir al cine" name="Aficion2" type="checkbox">
    <label>Ir al cine</label>

    <input value="Jugar videojuegos" name="Aficion3" type="checkbox">
    <label>Jugar videojuegos</label>

    <label class="label" for="Comentarios">Comentarios</label>
    <textarea class="text-area" name="Comentarios"></textarea>

    </fieldset>

    <button class="button" type="submit">Enviar</button>

</form>

<?php if($Evaluar) : ?>

    <table class="tabla">

        <thead class="tabla__headers">

            <tr>

                <th>Registro</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>País</th>
                <th>Estado</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Afición 1</th>
                <th>Afición 2</th>
                <th>Afición 3</th>
                <th>Comentarios</th>

            </tr>

        </thead>

        <tbody class="tabla__cuerpo">

            <tr>

                <td><?php echo $Registro ?></td>
                <td><?php echo $Nombre ?></td>
                <td><?php echo $Direccion ?></td>
                <td><?php echo $Paises ?></td>
                <td><?php echo $Estado ?></td>
                <td><?php echo $Sexo ?></td>
                <td><?php echo $Telefono ?></td>
                <td><?php echo $Aficion1 ?></td>
                <td><?php echo $Aficion2 ?></td>
                <td><?php echo $Aficion3 ?></td>
                <td><?php echo $Comentarios ?></td>

            </tr>

        </tbody>

    </table>

<?php endif; ?>

</div>


</main>

</body>
</html>