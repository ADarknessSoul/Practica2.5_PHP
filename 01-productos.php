<?php

include './includes/templates/header.php';

$Enviado = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Enviado = true;

    $cantidad1 =  $_POST['cant1'];
    $cantidad2 =  $_POST['cant2'];
    $cantidad3 =  $_POST['cant3'];
    $CostoTotal = '';
    $IVA = '';
    
    if(!empty($cantidad1) && !empty($cantidad2) || !empty($cantidad3)){

        $IVA = 1.16;

        $CostoTotal = (($cantidad1 * 50) + ($cantidad2 * 30) + ($cantidad3 * 40)) * $IVA;

    }



}



?>
    
    <form method="POST">

        <table class="tabla">

            <thead class="tabla__headers">

                <tr>

                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>

                </tr>

            </thead>

            <tbody class="tabla__cuerpo">

                <tr>

                    <td>111</td>
                    <td>Motor</td>
                    <td>$50</td>
                    <td>
                        <input name="cant1" type="number">
                    </td>

                </tr>

                <tr>

                    <td>222</td>
                    <td>Aceite</td>
                    <td>$30</td>
                    <td>
                        <input name="cant2" type="number">
                    </td>

                </tr>

                <tr>

                    <td>333</td>
                    <td>Filtro de aire</td>
                    <td>$40</td>
                    <td>
                        <input name="cant3" type="number">
                    </td>

                </tr>

            </tbody>

        </table>

        <div class="text-center">

            <button class="button" type="submit">Enviar</button>

        </div>


    </form>

    <?php if($Enviado) : ?>

        <table class="tabla">

            <thead class="tabla__headers">

                <tr>

                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Costo total</th>
                    <th>IVA</th>

                </tr>

            </thead>

            <tbody class="tabla__cuerpo">

                <tr>

                    <td>111</td>
                    <td>Motor</td>
                    <td>$50</td>
                    <td>
                        <?php echo $cantidad1; ?>
                    </td>

                </tr>

                <tr>

                    <td>222</td>
                    <td>Aceite</td>
                    <td>$30</td>
                    <td>
                        <?php echo $cantidad2; ?>
                    </td>
                    <td>
                        <?php echo $CostoTotal; ?>
                    </td>
                    <td>
                        <?php echo $IVA; ?>
                    </td>

                </tr>

                <tr>

                    <td>333</td>
                    <td>Filtro de aire</td>
                    <td>$40</td>
                    <td>
                        <?php echo $cantidad3; ?>
                    </td>

                </tr>

            </tbody>

        </table>

        </form>

    <?php endif ?>

</body>
</php>