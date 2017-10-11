<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen de Mecanografía en JS</title>
    <!--agrega aquí el script de JavaScript-->
    <script src="<?php echo base_url('public/js/script.js') ?>" async></script>
    <!-- agrega aquí el script para el estilo-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css') ?>">
</head>

<body>
    <header class="masthead">
        <h1>Mide tu velocidad al teclear</h1>
    </header>
    <main class="main">
        <article class="intro">
            <p>Esta es una prueba de mecanografía. Tu objetivo es copiar de forma idéntica el texto mostrado abajo. El cronómetro comienza cuando comienzas a escribir y se detiene cuando el texto es igual. ¡Buena suerte!</p>
        </article><!-- .intro -->
        <section class="test-area">
            <div id="origin-text">
                <p>El texto a copiar.</p>
            </div><!-- #origin-text -->

            <div class="test-wrapper">
                <textarea id="test-area" name="textarea" rows="6" placeholder="El reloj comienza cuando escribes"></textarea>
            </div><!-- .test-wrapper -->

            <div class="meta">
                <div id="clock">
                    <div class="timer">00:00:00</div>
                </div>

                <button id="reset">Restablecer</button>
            </div><!-- .meta -->
        </section><!-- .test-area -->
    </main>
</body>

</html>
