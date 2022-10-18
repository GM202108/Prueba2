<?php 
include './components/init_page.php';
include './components/navbar.php';
?>


<!-- Registro -->
<div class="Parte4">
    <?php 
include './components/ola1.php';
?>

    <div class="container  text-light bg-dark rounded-3 " style="width: 400px;">
        <?php 
include './components/ola2.php';
?>
        <h1 class="text-center">Envíanos un mensaje</h1>
        <div class="card-header text-center">
            <img width="50%" src="./Imagenes/Torre.png" alt="">
        </div>

        <form data-aos="fade-down" data-aos-delay="100" class="p-4 rounded-3">

            <div class="mb-3 d-grid">
                <label class="tp-style-text" for="text">Nombre</label>
                <input class="form-control rounded-3" type="text" name="" id="name" required="">
            </div>

            <div class="mb-3 d-grid">
                <label for="email" class="form-label tp-style-text">Correo Electrónico</label>
                <input type="email" class="form-control rounded-3" id="email" aria-describedby="Email Casilla">
                <div class="form-text text-white tp-style-text">Ingresa tu correo electrónico.</div>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label tp-style-text">Escribe tu mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-light me-2 tp-style-nav">Enviar</button>

            </div>
        </form>
    </div>
</div>
<!-- Final registro -->


<!-- Footer -->
<?php 
include './components/footer_dt.php';
?>
<!-- Footer Final -->


<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>