<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo9 container-xxl">
    <div class="Corriendo"></div>
<img class=" position-absolute Sangre" src="./Imagenes/IMG-Escenas/Sangre.png" alt="">
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena8.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena10.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>