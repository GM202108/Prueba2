<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="body-false container-xxl">



    <div class="Container">

        <div class="Contenedor_Titulo">
            <h1 class="h1">Kuchisake - Onna</h1>
            <a class="h2" href="<?php echo baseUrl . '/historia.php'; ?>">Da click para ver la historia</a>
        </div>

    </div>
</div>




<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->



<?php include './components/end_page.php';?>



<script src=<?php echo baseUrl . "https://unpkg.com/sweetalert/dist/sweetalert.min.js" ?>></script>
<script src=<?php echo baseUrl . './JavaScript/alerta.js'; ?>></script>