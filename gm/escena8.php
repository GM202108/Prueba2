<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo8 container-xxl">
    <img class=" position-absolute Nubes" src="./Imagenes/IMG-Escenas/Nubes.png" alt="">

    <img class=" position-absolute DetrasOEsc8" src="./Imagenes/IMG-Escenas/DetrasOEsc8.png" alt="">
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena7.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena9.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena8.js'; ?>></script>