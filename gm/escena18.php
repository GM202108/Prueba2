<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div>
    <img class="img-fluid" src="./Imagenes/IMG-Escenas/EscenasComic-18.jpg" alt="">
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena17.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . 'historia.php'; ?>">Inicio</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>