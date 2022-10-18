<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo3 container-xxl">
    <div>
        <img class=" position-absolute SMCartero" src="./Imagenes/IMG-Escenas/SMCartero.png" alt="">
    </div>
    <div>
        <img class=" position-absolute SamuraiFrente" src="./Imagenes/IMG-Escenas/SMFrente.png" alt="">
    </div>
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena2.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena4.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena3.js'; ?>></script>