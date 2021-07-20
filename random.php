<?php

$api_response =file_get_contents('https://api.adviceslip.com/advice');

if ($api_response !== false) {
    $advice = json_decode( $api_response, true);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet">
    <title>Consejo</title>
</head>

<body>

    <main class="centro mainrandom ">


        <section class="sectionrandom">

            <figure id="robotwizard">

                <img src="https://i.pinimg.com/originals/7e/3d/85/7e3d85108c28a52299f1731213ae0d4f.png"
                    alt="hola, amigue">
                <figcaption>
                    <p id="suconsejo"> Tu consejo de hoy es: </p>
                </figcaption>

            </figure>

            <figure id="randomfig" class="centro">

                <img src="https://source.unsplash.com/random/600x300" alt="random image">

                <figcaption>

                    <?php 
                            foreach($advice['slip'] as $key => $value) {
                            if ($key === 'advice') {
                            echo '<p> "'. $value . '" </p>';
                             }
                         }
                     ?>

                </figcaption>

            </figure>
        </section>

        <section class="sectionbotones">

            <button id="consejo">Quiero otro consejo.</button>
            <button id="otro-consejo">Quiero otro <strong>tipo</strong> de consejo.</button>

        </section>

    </main>


    <script src="JS/js.js"></script>

</body>

</html>