<?php

$Evaluar = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Evaluar = true;

    $conversionDe = $_POST['FormGrados'];
    $conversionA = $_POST['FormGrados2'];
    $input = $_POST['grados'];
    $valorInicial = $input;

    function realizarConversion($conversionDe, $conversionA, $input) {

        switch($conversionDe) {

            case 'Centigrados':

                if($conversionA === 'Centigrados') return $input;

                else if($conversionA === 'Fahrenheit') {

                    return $input = ($input * (9/5)) + 32;

                }
                else if($conversionA === 'Kelvin') {

                    return $input = ($input + 273.15);

                }

                break;

            case 'Fahrenheit':

                if($conversionA === 'Fahrenheit') return $input;

                else if($conversionA === 'Centigrados') {

                    return $input = ($input - 32) * (5/9);

                }

                else if($conversionA === 'Kelvin') {

                    return $input = ($input - 32) *(5/9) +273.15;

                }

                break;
            
            case 'Kelvin':

                if($conversionA === 'Kelvin') return $input;

                else if($conversionA === 'Centigrados') {

                    return $input = $input - 273.15;

                }

                else if($conversionA === 'Fahrenheit') {

                    return $input = ($input - 273.15) * (9/5) + 32;

                }

        }

    }

    //Busca los valores de ambos select para utilizar la formula de conversión

    if(!empty($input)) {

        $input = realizarConversion($conversionDe, $conversionA, $input);

        $input = round($input, 2);

    }

}



include './includes/templates/header.php';

?>

<main class="Ej3">

<div class="conversion">

    <form method="POST">

    <div>

        <div>

            <input  placeholder="Ingresa los grados" class="conversion__grados" name="grados" type="number">
            <select class="conversion__select" name="FormGrados">

                <option value="Centigrados">Centigrados</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>

            </select>

            <p class="conversion__texto">A</p>

            <select class="conversion__select" name="FormGrados2">

                <option value="Centigrados">Centigrados</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>

            </select>

        </div>

    </div>

        <div class="text-center">

            <button class="button" type="submit">Enviar</button>

        </div>

    </form>

</div>

<?php if($Evaluar) :?>

<div class="resultado text-center">

    <h2 class="resultado__titulo">Resultado:</h2>
    <p class="resultado__subtitulo">Conversion de <?php echo $conversionDe ?> a <?php echo $conversionA ?></p>

    <div class="resultado__flex">

        <p class="resultado__valor"><?php echo $valorInicial ?>°</p>
        <div>|</div>
        <p class="resultado__valor"><?php echo $input ?>°</p>

    </div>


</div>

<?php endif; ?>

</main>


</body>
</html>
