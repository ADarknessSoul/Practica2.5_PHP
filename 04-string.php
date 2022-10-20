<?php
 
$Evaluar = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Evaluar = true;

    $cadena = $_POST['cadenaTexto'];
    $cadenaInicial = $cadena;

    $cadena = strtoupper($cadena);
    $cadena = trim($cadena);
    $cadena = preg_replace('/\s+/', ' ', $cadena); //Expresión regular que busca por espacios sobrantes

}


include './includes/templates/header.php';

?>

<main>

    <form method="POST">

        <label class="label" for="string">Ingresa una oración con espacios donde quieras</label>
        <input name="cadenaTexto" placeholder="Ingresa la cadena" class="input" id="string" type="text">

        <button class="button" type="submit">Enviar</button>

    </form>
    
    <?php if($Evaluar) : ?>

        <div class="resultado__flex">

        <div class="text-center">
            <h2>Valor ingresado: </h2>
            <p class="resultado__cadena"><?php echo $cadenaInicial ?></p>
            <?php var_dump($cadenaInicial); ?>
        </div>

        <div class="text-center">
            <h2>Valor corregido: </h2>
            <p class="resultado__cadena"><?php echo $cadena ?></p>
            <?php var_dump($cadena); ?>
        </div>
 
        </div>

    <?php endif; ?>

</main>

</body>
</html>