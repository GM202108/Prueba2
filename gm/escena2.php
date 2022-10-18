<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div>
    <p class="text-center">Tocan la puerta, el SAMURÁI ya se imagina quien puede ser.</p>
</div>

<div class="EscenaFondo2 container-xxl">
    
    <img class=" position-absolute Cartero" src="./Imagenes/IMG-Escenas/Cartero.png" alt="">
    <img class=" position-absolute PuertaEsc2" src="./Imagenes/IMG-Escenas/PuertaEsc2.png" alt="">
    <img class=" position-absolute Paredizquierda" src="./Imagenes/IMG-Escenas/ParedL.png" alt="">
    <img class=" position-absolute Parederecha" src="./Imagenes/IMG-Escenas/ParedR.png" alt="">
    <img class=" position-absolute PersonajeEspalda" src="./Imagenes/IMG-Escenas/Personaje_Espalda.png" alt="">
</div>



<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena1.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena3.php'; ?>">Siguiente</a>
    </div>
</div>


<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena22.js'; ?>></script>