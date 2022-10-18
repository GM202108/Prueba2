<?php 
include './components/init_page.php';
include './components/navbar.php';
?>


<!--Quienes somos-->
<div data-aos="fade-down" data-aos-delay="100" class="d-flex p-3 container">
    <div class="col-7 p-4">
        <h1 class="text-center">¿Quiénes Somos?</h1>

        <p class="text_alineacion">Somos una empresa especializada en el programa producción de multimedia del Sena,
            estamos desarrollando un cómic digital interactivo con el cuál esperamos involucrar a una gran masa de
            personas que se sientan identificadas con historias no muy habituales, y que quieran conocer otros puntos de
            vistas, es así como surgió el planteamiento de representar la historia de Kuchisake - Onna, una mujer que
            debido a sus vivencias muy siniestras y macabras desarrollan un gran desenlace a la historia.</p>
    </div>

    <div class="col-5 text-center">
        <img width="100%" src="./Imagenes/Torre.png" alt="">
    </div>
</div>
<!-- Final quienes somos -->


<!-- Sinopsis -->
<div class="text-light Parte4 text-center">
    <?php 
include './components/ola1.php';
?>

    <h1 data-aos="fade-down" data-aos-delay="100" class="text-center p-3">Sinopsis</h1>

    <div class="d-flex p-3 container">

        <div data-aos="fade-down" data-aos-delay="100" class="">
            <p class="text_alineacion">Una historia que te pondrá los pelos de punta, con la famosa Leyenda de Kuchisake
                - Onna, una historia originaria de Japón la cual es conocida más que todo por los Jóvenes
                universitarios, de kuchisake se dice que era un chica muy hermosa la cual se convirtió en la esposa de
                un respetado Samurái un hombre que se volvió loco después de enterarse de que su mujer lo engaño,
                cuentan que como acto de venganza le cortó su boca de oreja a oreja y desde entonces Kuchisake volvió
                como un demonio en busca de su esposo, para hacerle lo mismo que le hizo a ella, también se dice que
                gracias a eso desarrolló cierto rencor hacia los hombres y cada hombre que se encuentre los matara de la
                misma manera como se lo hicieron a ella. Preguntándoles: “si creen que es hermosa.”
            </p>

            <p class="text_alineacion">Dale clic en “CÓMIC” Para poder ver nuestro comic digital interactivo.</p>
            <a class="btn btn-light tp-style-nav" href="<?php echo baseUrl . '/comic.php'; ?>">Cómic</a>
        </div>

    </div>
</div>
<!-- Final Sinopsis -->


<!-- Personajes -->
<div>
    <?php 
include './components/ola2.php';
?>

    <h1 data-aos="fade-down" data-aos-delay="100" class="text-center p-3">Personajes</h1>

    <div class="d-flex p-3 container">
        <div data-aos="fade-down" data-aos-delay="100" class="col-6 text-center">
            <h1>Kuchisake-Onna</h1>
            <img style="height: 537px;" class="p-3" width="50%" src="./Imagenes/KuchisakeMuerta.svg" alt="">
            <p class="text_alineacion p-3">Kuchisake era una chica muy hermosa que conoció a un gran guerrero, el cual
                se convirtió en su Esposo, era
                una familia feliz sin ninguna preocupación. Todo empeoro cuando su esposo se fue a la guerra y decidió
                engañarlo.</p>
        </div>

        <div data-aos="fade-down" data-aos-delay="100" class="col-6 text-center">
            <h1>Samurai</h1>
            <img style="height: 537px;" class="p-3" width="50%" src="./Imagenes/Samurai.svg" alt="">
            <p class="text_alineacion p-3">En su momento el mejor guerrero Samurái de su época con tan solo 25 años ha
                llegado a ganar cientos de batallas por su País, llevando a cabo la gran victoria para su nación
                regresando con ansias a ver a su esposa.</p>
        </div>
    </div>
</div>
<!-- Final personajes -->


<!-- Footer -->
<?php 
include './components/footer.php';
?>
<!-- Footer Final -->


<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>