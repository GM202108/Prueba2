<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo1 container-xxl">

    <img class=" position-absolute Puertaizquierda" src="./Imagenes/IMG-Escenas/PuertaIzquierda.png" alt="">

    <img class=" position-absolute Puertaderecha" src="./Imagenes/IMG-Escenas/PuertaDerecha.png" alt="">
</div>


<div>
    <p class="text-center">En el siglo IX en Japón existió una mujer muy hermosa, adulada por todos los hombres...
        Allí vivía en un templo con su esposo, un respetado SAMURÁI.</p>
</div>


<!-- Botones no tocar -->
<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/historia.php'; ?>">Historia</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena2.php'; ?>">Siguiente</a>
    </div>
</div>




<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena1.js'; ?>></script>

