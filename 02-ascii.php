<?php

$Evaluar = false;
$Contador = 31;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Evaluar = true;

    $cantidadAscii = $_POST['ascii'];

    // var_dump("Hola " . chr(34));

    $caracteres = [];

    if(!empty($cantidadAscii)) {

        for($i = 32; $i <= 32 + $cantidadAscii; $i++) {

            array_push($caracteres, chr($i));
        
        }

    }

}


include './includes/templates/header.php';

?>

<main>

<form method="POST">

    <label class="label" for="ascii">Ingresa el número de caracteres ascii que deseas imprimir</label>
    <input class="input" name="ascii" id="ascii" type="number">

    <button class="button" type="submit">Enviar</button>

</form>

<?php if($Evaluar) :?>

    <table class="tabla">

        <thead class="tabla__headers">

            <tr>

                <th>Número de caracter</th>
                <th>Código Ascii</th>

            </tr>

        </thead>

        <tbody class="tabla__cuerpo">

            <?php foreach( $caracteres as $caracter ) : ?>
                <tr>

                    <?php $Contador += 1; ?>
                    <td><?php echo $Contador ?></td>
                    <td><?php echo $caracter ?></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
        
    </table>

<?php endif; ?>

</main>



</body>
</html>
