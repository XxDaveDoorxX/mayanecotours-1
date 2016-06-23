<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Diving|In cave, single dive";
}else{
  $titulo="Buceo | En cueva, una inmersión";
}

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
$host     = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
$currentUrl = $protocol . '://' . $host . $script;
$currentUrl;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mayan Ecotours - Ecoturismo en Yucatan, Mexico - <?php echo $titulo; ?></title>
<meta name="keywords" content="Tours Yucatan, agencia de viajes Yucatan, ecoturismo yucatan, ecotourism Mexico, Yucatan travel agency, Esnorquel, Snorkel, Kayak, Espeleología, Ecoturismo, México, Cuevas,  
Rappel, Exploración, Tours, Expedición, Viajes, Aventura, Adrenalina, Vacaciones, Buceo, Ecotours, 
Eco Tours, Maya, Mayan, Chichen-Itza, Uxmal, Celestún, Reserva, Flamingos, Progreso, Dzibilchaltun, 
Aguas Sagradas, Mayan Eco Tours, Playa, Mar, Agua, Inframundo Maya, Viajes, Excursiones, Haciendas, 
Henequén, Sisal, Truck, Vida Maya">
<meta name="description" content="Contiene el tour de cenotes, Mayan Ecotours">
<meta name="author" content="mayanecotours">

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include('includs/analytics.php'); ?>

<?php include('includs/menu.php'); ?>
<section class="hidden-xs">
    <div class="bg-form-interior">
      <?php include('includs/form_interior.php'); ?>
    </div>
    <img src="images/banner_interiores/cueva_una_imersion.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/cueva_una_imersion.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Diving ';}else{echo'Buceo';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'In cave, single dive';}else{echo'En cueva, una inmersión';} ?></span></h1>
      </div>
    </div>
  </div>
</section>

<!--formulario movil-->
<?php include('formulario_interiores_movil.php') ?>
<!--------end-------->

<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <?php
        if($_SESSION['lang']=='en')
        {
          ?>
          <div id="info-general">
            <h1>GENERAL INFORMATION</h1>
            <h2>CAVES</h2>
            <p>
              In general, the caves are formed in a manner similar to the cenotes, but there are some places where water table is very deep, so they are kept dry the cavities formed by seepage and landslides.
            </p>
            <p>
              Water tanks may originate from them by the runoff from the walls and the water cannot have the same level as neighboring cenotes. The diameter of the inputs is commonly less than the sinkholes.
            </p>
            <p>
              The water is usually found near the lateral margins only, as the rocks that have fallen from the vaulted ceilings have been raising the floor level in the center.
            </p>
            <h2>CENOTES</h2>
            <p>
              By tradition, cenotes are a distinctive insignia of the natural Yucatecan landscape. Sunlight filtering through the cracks in the rocks and projecting into the transparent water is a visual banquet for nature lovers.
            </p>
            <p>
              Cenotes vary in size and shape according to their location. They can be as irregular as the sunken ground that makes them possible. Some are open in the form of a lake or pool, other cenotes, are half hidden in the caverns,  still other cenotes are completely enclosed except for the sprinkling of sunlight through the cracks above and some are only accessible by following underground passages.
            </p>
            <p>
              Although no two are alike, cenotes share certain characteristics. The water is cool and fresh since it emerges from underground deposits. It is clear and rich in flora and fauna giving rise to an ecosystem in almost perfect balance, and spectacularly beautiful.
            </p>
            <p>
              As well as their exquisite natural beauty, cenotes have an important archaeological value and are perfect for ecotourism activities, such as cave diving, submerging and penetrating the cave depths, exploring sub aquatic galleries, and finding your way through the labyrinth of underwater tunnels is an unforgettable experience for any enthusiast.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <h2>CUEVAS SUBACUÁTICAS</h2>
            <p>
              Las cuevas subterráneas representaban lugares sagrados para los antiguos Mayas. Durante miles de años, los mayas que habitaban en esta área dependían del agua hallada en cuevas y lagos formados por sumideros, lugares donde se derrumbaban los techos de las cavernas y afloraba el agua.
            </p>
            <p>
              Yucatán cuenta con el sistema de cuevas subacuáticas más largo del mundo, con una longitud de aproximadamente 153 kilómetros. Es un paraíso submarino donde se interconectan espectaculares túneles, algunos muy anchos y otros tan estrechos que apenas se podrían atravesar.
            </p>
            <h2>CENOTES</h2>
            <p>
              El espectacular paisaje subterráneo, rodeado de estalactitas y estalagmitas hacen de cada cenote un lugar digno de admiración; la luz del sol filtrada por agujeros entre las rocas y proyectada sobre las aguas verdes, cristalinas o turquesas se conjugan para ofrecer un deleite visual a los visitantes.
            </p>
            <p>
              Los cenotes varían en forma y tamaño, según el lugar donde se ubiquen. Hay de tipo abierto a manera de lago y ojo de agua; semiocultos en cavernas; los cerrados, aunque por lo general tienen alguna abertura donde se filtra la luz del sol, y algunos cenotes a los que solo es posible acceder después de una caminata por pasillos subterráneos. El agua fresca que emerge de ellos es clara y rica en flora y fauna lo cual da origen a un ecosistema de equilibrio perfecto.
            </p>
            <p>
              Objeto de especulaciones y leyendas, los cenotes jugaron un papel determinante en el desarrollo de la civilización maya. Grandes asentamientos de esta cultura se formaron a su alrededor además de ser un punto clave en la religión y culto a sus dioses.
            </p>
            <p>
              Combinación de importante valor arqueológico y exquisita belleza natural, los cenotes son atractivos lugares para el desarrollo de actividades ecoturísticas, especialmente del espeleobuceo. Por lo tanto, todos aquellos que disfrutan de este fascinante deporte, vivirán una experiencia única al sumergirse en las profundidades de estas galerías subacuáticas, además también se puede disfrutar de un chapuzón, nadar y bajar a rappel, dentro de este ambiente mágico.
            </p>
          </div>
          <?php
        }
        ?>
        <hr class="hr-interiores">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php
          if($_SESSION['lang']=='en')
          {
            ?>
            <div id="caracteristicas">
              <h1>TOUR DETAILS</h1>
              <p>
                The best caves in the world are found in Yucatan.  For those who want to venture beyond the cave and explore the underworld of the Mayan flooded caves. Mayan Ecotours gives you the opportunity to do so in an environment of safety, professionalism and fun; where we assure new knowledge and unique experiences and unforgettable adventures. If you have a Cave level certificate, do not miss the opportunity to explore and dive the caves of Yucatan with us.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Two immersions in a beautiful cenote</li>
                <li>Transportation in vehicle with A/ C</li>
                <li>Certified diving Cave Guide (Full Cave) with first aid</li>
                <li>Support with people and land surface</li>
                <li>Rescue Team, ropes, carabiners and rappelling equipment</li>
                <li>Diving Equipment: DOUBLE TANKS with manifold, belt</li>
                <li>Leads</li>
                <li>Submersible Lamp 50 Watts with 3:00 hours FAMI</li>
                <li>Soft drinks</li>
                <li>Entrance fees</li>
                <li>We have oxygen, first aid kit and training for proper use</li>
                <li>New knowledge and lots of fun!</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Food<br>
                • Tips
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Las mejores cuevas del mundo se encuentran en Yucatán.
              </p>
              <p>
                Para aquellos que quieren aventurarse más allá de la caverna y explorar el inframundo de las cuevas mayas inundadas, Mayan Ecotours te da la oportunidad de hacerlo dentro de un ambiente de seguridad, profesionalismo y diversión. Te aseguramos conocimientos nuevos, así como experiencias inolvidables y aventuras únicas.
              </p>
              <p>
                Si cuentas con el nivel de cueva, aprovecha la oportunidad de explorar y bucear las cuevas de Yucatán con nosotros.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Una inmersión en un magnífico cenote</li>
                <li>Transportación en vehículo con A/C con seguro de viajero</li>
                <li>Guía certificado en buceo de Cueva (Full Cave) y primeros auxilios</li>
                <li>Apoyo con gente en superficie y terrestre</li>
                <li>Equipo de rescate, cuerdas, mosquetones y equipo de rappel</li>
                <li>Equipo de buceo: TANQUES DOBLES con manifold</li>
                <li>Cinturón con plomos</li>
                <li>Lámpara sumergible de 50 Watts con 3 horas de duración. FAMI</li>
                <li>Bebidas no alcohólicas</li>
                <li>Cuotas de entrada</li>
                <li>Contamos con oxígeno, botiquín de primeros auxilios y capacitación para su uso correcto.</li>
                <li>Conocimientos nuevos ¡y mucha diversión!</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Propinas
              </p>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="row" id="actividades">
            <div class="col-xs-4 col-sm-2 col-md-2">
              <?php
              if($_SESSION['lang']=='en'){echo'<p class="txt-activides">Activities<br>Available</p>';}else{echo'<p class="txt-activides">Actividades<br>disponibles</p>';}
              ?>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/06.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/13_buceo.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <!--<h1>Salidas: <span>0 horas</span></h1>-->
              <?php include('includs/btn_reserva_cueva.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('includs/footer.php'); ?>
<a href="#" class="btn back-to-top btn-dark btn-fixed-bottom"> <span class="glyphicon glyphicon-chevron-up"></span> </a>
<?php include('includs/form_paypal.php'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/menu.js"></script>
<!--hover isotope-->
<script src="js/wow.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/isotope.pkgd.min.js"></script> 
<script src="js/main.js"></script>

<!-- Validation -->
<?php include('includs/validacion.php'); ?> 

<script type="text/javascript">

// TODO: make customizable
$(document).ready(function () {
  var duration      = 420;
  var showOffset    = 220;
  var btnFixed      = '.btn-fixed-bottom';
  var btnToTopClass = '.back-to-top';

  $(window).scroll(function () {
    if ($(this).scrollTop() > showOffset) {
      $(btnFixed).fadeIn(duration);
    } else {
      $(btnFixed).fadeOut(duration);
    }
  });

  $(btnToTopClass).click(function (event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  });
});
</script>
</body>
</html>
