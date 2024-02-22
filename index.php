<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="centro">
        <h1>Calculadora de IMC</h1>

        <form action="" method="POST">
            <div id="cal">
                <h3>IMC</h3>
                <div class="con_1">
                    <input type="number" id="peso" name="peso" placeholder="Peso (KG)">
                </div>
                <div>
                    <input class="con_1" id="altura" type="number" name="altura" placeholder="Altura (M)">
                </div>
            </div>
            <div>

                <input id="bnt_calculo" type="submit" value="Calcular">
            </div>
        </form>
    </div>
    <?php

    if (!empty($_POST["peso"]) && (!empty($_POST["altura"]))) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $calculo = $peso / ($altura * $altura);

        $muitobaixo = 16.9;
        $abaixodopeso = 17;
        $abaixodopeso2 = 18.4;
        $pesonormal = 18.5;
        $pesonormal2 = 24.9;
        $acimadopeso = 25;
        $acimadopeso2 = 29.9;


        if($calculo < 16.9){
            echo "muito baixo";
        }
    }

    ?>

</body>

</html>