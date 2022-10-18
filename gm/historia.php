<?php 
include './components/init_page.php';
include './components/navbar.php';
?>




<div  class="body-false text-center position-relative container-xxl">

<img src="./Imagenes/PapelHistoria.svg" alt="">
    <div class="papeltexto position-absolute text-center w-50 wx-auto">
        <p>La leyenda remonta a hechos del período
            Heian que se popularizaron durante la época Edo... La leyenda dice que hace mucho tiempo había una preciosa
            pero vanidosa mujer que fue la esposa o la concubina de un samurái. La bellísima mujer era pretendida por
            muchos hombres y acostumbraba a engañar a su marido, el samurái sabía de las infidelidades de su esposa o
            concubina, por lo que un día, en un ataque de celos y furia, le cortó la boca de un lado a otro mientras
            gritaba: ¿¡Piensas que eres hermosa!? Desde que fue asesinada y mutilada por su esposo se convirtió en un
            Yōkai (espíritu demoníaco) o Gwishin (alma en pena), regresando para vengarse preguntándole a sus víctimas
            si es hermosa, las cuales al responder son posteriormente asesinadas por ella.</p>
    </div>

    <div class="w-90 mx-auto diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra" href="<?php echo baseUrl . '/escena1.php'; ?>">Iniciar</a>
    </div>
            
       


</div>



<audio src="./Audios-Videos/Tenebrosa.mp3" autoplay></audio>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>