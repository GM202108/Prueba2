<?php 
include './components/init_page.php';
include './components/navbar.php';
?>


<!-- Inicio carrusel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="./Imagenes/Modificable_Coming.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>

        <div class="carousel-item">
            <img src="./Imagenes/PortadaKuchisake.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-danger tp-style-nav" href="<?php echo baseUrl . '/comic.php'; ?>">Cómic</a>
                <p>Da clic para conocer nuestro cómic.</p>
            </div>
        </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Final carrusel -->


<!-- Inicio Anatema -->
<div data-aos="fade-down" data-aos-delay="100">
    <h1 class="text-center">Anatema</h1>
    <div class="d-flex container p-3">
        <div class="col-6">
            <p class="text_alineacion">El siguiente manual de identidad corporativo da las pautas y normas a seguir para
                el buen uso de los temas y elementos de la marca Anatema, en el mismo se tratan temas de estructura,
                conceptos, usos, color y tipografías.</p>

            <p class="text_alineacion">El manual entonces debe ser usado y visto como un apoyo y herramienta para el uso
                de todos los miembros del proyecto Anatema, el objetivo del manual es que las producciones con estos,
                logo y conceptos.</p>

            <p class="text_alineacion">La idea de este manual no tiene la intención de limitar o cohibir, la creatividad
                de los productores sino
                brindar una herramienta con objetivos claros.</p>
        </div>

        <div class="col-6 d-flex justify-content-center align-items-center">
            <img width="85%" src="./Imagenes/Logo_Anatema_ConLT.svg" alt="">
        </div>
    </div>
</div>
<!-- Final Anatema -->


<!-- Inicio Kuchisake-Onna -->
<div class="text-light Parte4">
    <?php 
include './components/ola1.php';
?>

    <h1 data-aos="fade-down" data-aos-delay="100" class="text-center p-3">Kuchisake - Onna</h1>
    <div class="d-flex p-3 container">

        <div data-aos="fade-down" data-aos-delay="100" class="col-6 d-flex justify-content-center align-items-center">
            <img width="50%" src="./Imagenes/KuchisakeOnna.svg" alt="">
        </div>

        <div data-aos="fade-down" data-aos-delay="100" class="col-6">
            <p class="text_alineacion">Kuchisake-Onna (en japonés:mujer con la boca cortada, o mujer con la boca rota)
                es una leyenda urbana muy
                popular del folclore japonés y coreano, trata sobre una mujer que fue asesinada y mutilada por su esposo
                y
                se convirtió en un Yōkai (espíritu demoníaco) o Gwishin (alma en pena), regresando para vengarse
                preguntándole a sus víctimas si es hermosa,las cuales al responder son posteriormente asesinadas por
                ella.
            </p>

            <p class="text_alineacion">La leyenda remonta a hechos del período Heian que se popularizaron durante la
                época Edo. La leyenda dice
                que hace mucho tiempo había una preciosa pero vanidosa mujer que fue la esposa o la concubina de un
                samurái.
            </p>

            <p class="text_alineacion">La bellísima mujer era pretendida por muchos hombres y acostumbraba a engañar a
                su marido. El samurái sabía
                de las infidelidades de su esposa o concubina, por lo que un día, en un ataque de celos y furia, le
                cortó la
                boca de un lado a otro mientras gritaba: ¿Piensas que eres hermosa?. Otras versiones cuentan que ella se
                había casado con un samurái muy celoso que la golpeaba mucho.</p>

            <p class="text_alineacion">El samurái, un día, pensando que le estaba engañando, le cortó la boca. La mujer,
                cansada de los maltratos,
                huye adentrándose en el bosque y nunca más se supo de ella.</p>
        </div>

    </div>
</div>
<!-- Final Kuchisake-Onna -->


<!-- Inicio Okami -->
<div>
    <?php 
include './components/ola2.php';
?>

    <h1 data-aos="fade-down" data-aos-delay="100" class="text-center p-3">Okami</h1>
    <div class="d-flex p-3 container">
        <div data-aos="fade-down" data-aos-delay="100" class="col-6">
            <p class="text_alineacion">Teniendo en cuenta la importancia de los conocimientos globales sobre mitos
                extranjeros, hace imprescindible contar historias diferentes a las ya conocidas, es así como surge la
                idea de representar la historia de Kuchisake-Onna en un cómic digital, con el cual esperamos despertar
                el interés por el continente Asiático, el cual ya que es poco estudiado y conocido en los ambientes
                educativos de Colombia.</p>
        </div>

        <div data-aos="fade-down" data-aos-delay="100" class="col-6 d-flex  justify-content-center align-items-center">
            <img width="50%" src="./Imagenes/Logo_Okami_ConLT.svg" alt="">
        </div>
    </div>
</div>
<!-- Final Okami -->


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





<!-- <section class="container py-5"> -->
<!-- 
  get -> por url, forma no segura
  post -> por url, forma segura
 -->

<!-- <form action="" method="post" class='w-50 mx-auto'>
   <h2 class='text-center'>Register</h2>

  <div class="mb-3">
    <label for="correo" class="form-label">Email address</label>
    <input type="email" name="correo" class="form-control" id="correo">
  </div>

  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="pass">
  </div>
<div class="mb-3">

   <div class="form-check form-check-inline">
     <label for="Male" class="form-label">Male</label>
     <input type="radio" class="form-check-input" id="Male" name="genre" value="Male">   
   </div>
   <div class="form-check form-check-inline">
       <label for="Female" class="form-label">Female</label>
       <input type="radio" class='form-check-input' id="Female" name="genre" value="Female">
   </div>
</div>
<select class="mb-3 form-select" name="options">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="aceptar" value="okey" name="accepted">
    <label class="form-check-label" for="aceptar">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary w-100">Enviar</button>
</form>
</section> -->


<?php include './components/end_page.php';?>