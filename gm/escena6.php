<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div>
    <p class="text-center">El SAMURÁI se encuentra detrás de su esposa pensando cómo contarle 
lo que acaba de suceder.</p>
</div>

<div class="EscenaFondo6 container-xxl">
    <img class=" position-absolute DetrasSM" src="./Imagenes/IMG-Escenas/Personaje_Espalda.png" alt="">
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena5.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena7.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena6.js'; ?>></script>