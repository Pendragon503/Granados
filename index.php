<?php
declare(strict_types=1);

/**
 * index.php — misma vista, código reestructurado
 * Nota: Mantiene IDs/clases/paths para que CSS/JS sigan funcionando sin tocar nada más.
 */

function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

$site = [
  'lang'  => 'ES',
  'title' => 'Esmeralda',
  'brand' => 'Granados',
];

$stylesheets = [
  'css/bootstrap.min.css',
  'css/animate.min.css',
  'css/font-awesome.min.css',
  'css/nivo-lightbox.css',
  'css/nivo_themes/default/default.css',
  'css/templatemo-style.css',
];

$scripts = [
  'js/jquery.js',
  'js/bootstrap.min.js',
  'js/nivo-lightbox.min.js',
  'js/smoothscroll.js',
  'js/jquery.sticky.js',
  'js/jquery.parallax.js',
  'js/wow.min.js',
  'js/custom.js',
];

$nav = [
  ['id' => 'home',      'label' => 'INICIO'],
  ['id' => 'intro',     'label' => 'INTRODUCCIÓN'],
  ['id' => 'estudios',  'label' => 'ESTUDIOS'],
  ['id' => 'work',      'label' => 'TRABAJO'],
  ['id' => 'team',      'label' => 'VIAJES'],
  ['id' => 'portfolio', 'label' => 'PORTAFOLIO'],
  ['id' => 'contact',   'label' => 'CONTACTO'],
];

$intro = [
  'title' => 'Bienvenido a mi portafolio',
  'tagline' => 'Comunicación | Diseño | Producción',
  'text' => 'Mi experiencia laboral la he desarrollado dentro del ámbito de proyectos sociales, implementando mis conocimientos académicos y profesionales en planes de trabajos, métodos de organización, propuestas para redes sociales, producciones audiovisuales, organización de eventos desde la logística, montaje y producción.',
  'skills' => [
    ['icon' => 'fa-camera-retro', 'title' => 'Producción Audiovisual',    'desc' => 'Creación de contenido multimedia de alta calidad'],
    ['icon' => 'fa-bullhorn',     'title' => 'Comunicación Estratégica',  'desc' => 'Desarrollo de estrategias efectivas para diversos públicos'],
    ['icon' => 'fa-calendar',     'title' => 'Producción de Eventos',     'desc' => 'Organización integral desde la planificación hasta la ejecución'],
  ],
];

$academics = [
  [
    'date' => '2014-2017',
    'title' => 'Licenciatura en Comunicaciones',
    'place' => 'Universidad Autónoma de Santa Ana',
    'desc' => 'Enfoque en estrategias comunicacionales y creación de contenido multimedia innovador',
    'icon' => 'fa-graduation-cap',
  ],
];

$jobs = [
  [
    'date' => "Febrero 2018<br>a la fecha",
    'title' => 'Coordinadora de Producción',
    'place' => 'Fundación Dei Verbum',
    'desc' => 'Producciones audiovisuales, edición fotográfica, video y audio, transmisiones en vivo, diseño gráfico, manejo de redes sociales, segmentación de pauta publicitaria.',
    'icon' => 'fa-video-camera',
  ],
  [
    'date' => "Agosto 2019<br>Enero 2020",
    'title' => 'Community Manager (Freelance)',
    'place' => 'Brujula Design',
    'desc' => 'Elaboración de materiales gráficos para diferentes redes sociales.',
    'icon' => 'fa-users',
  ],
  [
    'date' => "Noviembre 2017<br>Enero 2018",
    'title' => 'Supervisora de Montaje y Eventos',
    'place' => 'Comunica',
    'desc' => 'Supervisión de montaje: tarimas, luces, sonido y asistente de producción.',
    'icon' => 'fa-cogs',
  ],
  [
    'date' => "Julio 2015<br>Diciembre 2016",
    'title' => 'Producción de Eventos / Redes Sociales',
    'place' => 'Fundación Azteca El Salvador',
    'desc' => 'Manejo de redes sociales. Propuesta de eventos, rider del evento, cotizar proveedores, supervisión de montaje, logística y producción. Conciertos sinfónicos, conferencias de prensa, Producción de la Gira Vive Sin Drogas 2015 El Salvador.',
    'icon' => 'fa-calendar',
  ],
  [
    'date' => "Febrero 2014<br>Julio 2015",
    'title' => 'Asistente de Proyectos / Redes Sociales',
    'place' => 'Fundación Azteca El Salvador',
    'desc' => 'Elaboración de cartas, presupuestos, flash report, conferencias de prensa, asistente de gerencia.',
    'icon' => 'fa-paperclip',
  ],
];

$team = [
  'title_html' => "Colaboración <br><br>&amp; creatividad",
  'desc' => 'He tenido la oportunidad de trabajar en proyectos internacionales, colaborando con viajes de diferentes culturas y contextos.',
  'slider1' => [
    ['img' => 'images/team1.jpg', 'alt' => 'Cúpula de la Roca, Jerusalén, Israel', 'h4' => 'Cúpula de la Roca', 'h3' => 'Jerusalén, Israel'],
    ['img' => 'images/team2.jpg', 'alt' => 'Basílica de Guadalupe, Ciudad de México', 'h4' => 'Basílica de Guadalupe', 'h3' => 'Ciudad de México'],
    ['img' => 'images/team3.jpg', 'alt' => 'Medjugorje, Bosnia y Herzegovina', 'h4' => 'Medjugorje', 'h3' => 'Bosnia y Herzegovina'],
    ['img' => 'images/V-_0000_Roma, Metropolitan City of Rome Capital, Italia.jpg', 'alt' => 'Metropolitan City of Rome, Italia', 'h4' => 'Metropolitan City of Rome', 'h3' => 'Roma, Italia'],
    ['img' => 'images/V-_0001_Nazareth, Israel.jpg', 'alt' => 'Basílica de la Anunciación, Nazaret, Israel', 'h4' => 'Basílica de la Anunciación', 'h3' => 'Nazaret, Israel'],
    ['img' => 'images/V-_0002_Monte de las Bienaventuranzas.jpg', 'alt' => 'Monte de las Bienaventuranzas, Bosnia y Herzegovina', 'h4' => 'Monte de las Bienaventuranzas', 'h3' => 'Bosnia y Herzegovina'],
    ['img' => 'images/V-_0003_Monserrat, España.jpg', 'alt' => 'Basílica de Montserrat, Montserrat, España', 'h4' => 'Basílica de Montserrat', 'h3' => 'Montserrat, España'],
    ['img' => 'images/V-_0004_Monestir de Montserrat, España.jpg', 'alt' => 'Monestir de Montserrat, Montserrat, España', 'h4' => 'Monestir de Montserrat', 'h3' => 'Montserrat, España'],
    ['img' => 'images/V-_0005_México.jpg', 'alt' => 'Ciudad de México, México', 'h4' => 'Ciudad de México', 'h3' => 'Ciudad de México, México'],
    ['img' => 'images/V-_0006_Međugorje, Bosnia y Herzegovina.jpg', 'alt' => 'Basílica de Međugorje, Bosnia y Herzegovina', 'h4' => 'Basílica de Međugorje', 'h3' => 'Međugorje, Bosnia y Herzegovina'],
  ],
  'slider2' => [
    ['img' => 'images/V-_0007_Mar de Galilea.jpg', 'alt' => 'team img', 'h4' => 'Mar de Galilea', 'h3' => 'Israel'],
    ['img' => 'images/V-_0008_Magdala.jpg', 'alt' => 'team img', 'h4' => 'Magdala', 'h3' => 'Israel'],
    ['img' => 'images/V-_0009_Lourdes, Francia.jpg', 'alt' => 'team img', 'h4' => 'Lourdes', 'h3' => 'Francia'],
    ['img' => 'images/V-_0010_Lisboa, Portugal.jpg', 'alt' => 'team img', 'h4' => 'Lisboa', 'h3' => 'Portugal'],
    ['img' => 'images/V-_0011_Lanciano, Province of Chieti, Italia.jpg', 'alt' => 'team img', 'h4' => 'Lanciano', 'h3' => 'Province of Chieti, Italia'],
    ['img' => 'images/V-_0012_Kafr Kanna, Israel.jpg', 'alt' => 'team img', 'h4' => 'Kafr Kanna', 'h3' => 'Israel'],
    ['img' => 'images/V-_0013_Jerusalén, Israel.jpg', 'alt' => 'team img', 'h4' => 'Jerusalén', 'h3' => 'Israel'],
    ['img' => 'images/V-_0014_Fatima, Portugal1.jpg', 'alt' => 'team img', 'h4' => 'Fátima', 'h3' => 'Portugal'],
    ['img' => 'images/V-_0015_Fatima, Portugal.jpg', 'alt' => 'team img', 'h4' => 'Fátima', 'h3' => 'Portugal'],
    ['img' => 'images/V-_0017_Catedral-Basílica de Nuestra Señora del Pilar.jpg', 'alt' => 'team img', 'h4' => 'Catedral-Basílica de Nuestra Señora del Pilar', 'h3' => 'España'],
    ['img' => 'images/V-_0018_Canna.jpg', 'alt' => 'team img', 'h4' => 'Canna', 'h3' => 'Italia'],
    ['img' => 'images/V-_0019_Cafarnaúm.jpg', 'alt' => 'team img', 'h4' => 'Cafarnaúm', 'h3' => 'Israel'],
    ['img' => 'images/V-_0026_Tel Aviv - Yafo, Israel.jpg', 'alt' => 'team img', 'h4' => 'Tel Aviv - Yafo', 'h3' => 'Israel'],
    ['img' => 'images/V-_0022_Barcelona, España.jpg', 'alt' => 'team img', 'h4' => 'Barcelona', 'h3' => 'España'],
    ['img' => 'images/V-_0026_Tel Aviv - Yafo, Israel.jpg', 'alt' => 'team img', 'h4' => 'Tel Aviv - Yafo', 'h3' => 'Israel'],
  ],
];

$portfolio = [
  'title' => 'Mi Portafolio',
  'subtitle' => 'Creatividad Visual | Producción Audiovisual',
  'desc' => 'Aquí encontrarás una selección de los proyectos audiovisuales más representativos de mi trayectoria profesional. Cada imagen cuenta una historia y refleja mi pasión por capturar momentos únicos a través del lente.',
  'videos' => [
    ['id' => 'J5rVSlzyE1Y', 'title' => 'Producción Audiovisual 1', 'delay' => '0.6s'],
    ['id' => 'J6Lo4O86CV0', 'title' => 'Producción Audiovisual 2', 'delay' => '0.9s'],
    ['id' => 'D_L2J4HQHPk', 'title' => 'Producción Audiovisual 3', 'delay' => '1.2s'],
    ['id' => 'mRXTS6FHT7M', 'title' => 'Producción Audiovisual 4', 'delay' => '1.5s'],
    ['id' => 'EKRanHX5hS8', 'title' => 'Producción Audiovisual 5', 'delay' => '1.8s'],
    ['id' => 'AH37ZDRmvfM', 'title' => 'Producción Audiovisual 6', 'delay' => '2.1s'],
    ['id' => '5F5nD1mPoR4', 'title' => 'Producción Audiovisual 7', 'delay' => '2.4s'],
  ],
  'gallery' => [
    ['img' => 'images/F3.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img1.jpg',  'alt' => 'Proyecto audiovisual 1'],
    ['img' => 'images/F4.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img2.jpg',  'alt' => 'Proyecto audiovisual 2'],
    ['img' => 'images/F5.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img3.jpg',  'alt' => 'Proyecto audiovisual 3', 'title' => 'Proyecto audiovisual 3'],
    ['img' => 'images/F1.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/F2.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img4.jpg',  'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/P1.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img4.jpg',  'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img5.jpg',  'alt' => 'Proyecto audiovisual 5'],
    ['img' => 'images/P2.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img6.jpg',  'alt' => 'Proyecto audiovisual 6'],
    ['img' => 'images/P3.jpg',              'alt' => 'Proyecto audiovisual 4'],
    ['img' => 'images/portfolio img7.jpg',  'alt' => 'Proyecto audiovisual 7'],
    ['img' => 'images/portfolio img8.jpg',  'alt' => 'Proyecto audiovisual 8'],
  ],
];

$contact = [
  'title' => 'Contacto',
  'desc'  => 'Puedes contactarme para colaboraciones, proyectos o cualquier consulta profesional. ¡Estoy disponible para nuevas oportunidades!',
  'google_form' => 'https://docs.google.com/forms/d/e/1FAIpQLSdSeJUrSkkPQnTvl32dwFb2s_LEXUmm9uFx9XMtj78jw8RPLw/viewform?embedded=true',
  'iframe_height' => 956,
];

$footer = [
  'heading' => 'Follow Us',
  'facebook' => 'https://www.facebook.com/GranadosEsmeralda94',
  'copyright' => 'Copyright © 2025 Granados',
  'github' => ['label' => 'Pendragon503', 'url' => 'https://github.com/Pendragon503'],
];

function render_nav(array $site, array $nav): void { ?>
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><?= h($site['brand']) ?></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php foreach ($nav as $item): ?>
            <li><a href="#<?= h($item['id']) ?>" class="smoothScroll"><?= h($item['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
<?php }

function render_timeline(array $items): void { ?>
  <div class="timeline-modern">
    <?php foreach ($items as $it): ?>
      <div class="timeline-modern-item">
        <div class="timeline-modern-icon"><i class="fa <?= h($it['icon']) ?>"></i></div>
        <div class="timeline-modern-content">
          <span class="timeline-modern-date"><?= $it['date'] ?></span>
          <h3><?= h($it['title']) ?></h3>
          <div><?= h($it['place']) ?></div>
          <p><?= h($it['desc']) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php }

function render_team_slider(array $items, string $extraClass = ''): void { ?>
  <div class="team-slider-container <?= h($extraClass) ?>">
    <div class="team-slider wow fadeIn" data-wow-delay="0.9s">
      <?php foreach ($items as $t): ?>
        <div class="team-item">
          <img src="<?= h($t['img']) ?>" class="img-responsive" alt="<?= h($t['alt']) ?>">
          <div class="team-des">
            <h4><?= h($t['h4']) ?></h4>
            <h3><?= h($t['h3']) ?></h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php }

?><!DOCTYPE html>
<html lang="<?= h($site['lang']) ?>">
<head>
  <title><?= h($site['title']) ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <?php foreach ($stylesheets as $href): ?>
    <link rel="stylesheet" href="<?= h($href) ?>">
  <?php endforeach; ?>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

  <!-- preloader section -->
  <div class="preloader">
    <div class="sk-spinner sk-spinner-rotating-plane"></div>
  </div>

  <!-- home section -->
  <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1 class="wow bounceInDown rotate">Esmeralda Granados</h1>
          <h2 class="wow bounce">_________________________</h2>
          <a href="#intro" class="btn btn-default smoothScroll">Iniciar</a>
        </div>
      </div>
    </div>
  </section>

  <!-- navigation section -->
  <?php render_nav($site, $nav); ?>

  <!-- intro section -->
  <section id="intro">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 title">
          <h2 class="wow fadeInDown"><?= h($intro['title']) ?></h2>
          <hr>
          <h4 class="wow fadeIn" data-wow-delay="0.3s"><?= h($intro['tagline']) ?></h4>
          <div class="intro-text wow fadeIn" data-wow-delay="0.6s">
            <p><?= h($intro['text']) ?></p>
          </div>
        </div>
      </div>

      <div class="row skills-section wow fadeInUp" data-wow-delay="0.9s">
        <?php foreach ($intro['skills'] as $s): ?>
          <div class="col-md-4 col-sm-4 skill-item">
            <div class="skill-icon"><i class="fa <?= h($s['icon']) ?>"></i></div>
            <h4><?= h($s['title']) ?></h4>
            <p><?= h($s['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- estilos inline originales, mantenidos -->
    <style>
@media (max-width: 767px) {
  .title h2, .title h4, .title p {
    text-align: center !important;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .title {
    text-align: center !important;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  #team .row {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .team-slider, .reverse-slider .team-slider {
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    animation: none;
    width: 100%;
  }
  .team-item {
    flex: 0 0 98vw;
    max-width: 98vw;
    margin-bottom: 18px;
    margin-left: auto;
    margin-right: auto;
  }
  .team-des {
    font-size: 15px;
    padding: 10px 8px;
    text-align: center;
  }
}
/* RESPONSIVIDAD AVANZADA */
@media (max-width: 1200px) {
  .container {
    max-width: 98vw;
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 991px) {
  .team-slider, .reverse-slider .team-slider {
    gap: 12px;
    flex-wrap: wrap;
    animation: none;
    width: 100%;
    justify-content: center;
  }
  .team-item {
    flex: 0 0 48vw;
    max-width: 48vw;
    margin-bottom: 18px;
  }
  .team-item img {
    border-radius: 8px;
    height: auto;
    max-width: 100%;
  }
  .team-des {
    padding: 10px 8px;
    font-size: 15px;
  }
  .team-slider-container {
    padding: 10px 0;
  }
  #portfolio .col-md-3 {
    width: 48%;
    float: left;
    margin-bottom: 16px;
    padding: 0 2px;
  }
  .contact-form {
    padding: 0;
  }
}

@media (max-width: 767px) {
  /* Estilos mejorados para la sección de viajes */
  .team-slider-container {
    padding: 15px 0;
    margin-bottom: 20px;
  }

  .team-slider {
    display: grid !important;
    grid-template-columns: 1fr;
    gap: 20px;
    width: 100% !important;
    animation: none !important;
    transform: none !important;
  }

  .team-item {
    flex: none !important;
    max-width: 100% !important;
    width: 100% !important;
    margin: 0 !important;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .team-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  }

  .team-item img {
    width: 100%;
    height: 250px !important;
    object-fit: cover;
    border-radius: 0;
  }

  .team-des {
    background: linear-gradient(135deg, rgba(39, 174, 96, 0.95), rgba(46, 204, 113, 0.95)) !important;
    padding: 20px !important;
    text-align: center;
    position: relative !important;
    bottom: auto !important;
    width: 100% !important;
  }

  .team-des h4, .team-des h3 {
    color: #fff !important;
    margin: 5px 0 !important;
    font-size: 16px !important;
    line-height: 1.4 !important;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }

  .team-des h4 {
    font-weight: 700;
    font-size: 18px !important;
  }

  /* Estilos mejorados para la sección portfolio */
  #portfolio .col-md-3 {
    width: 100% !important;
    float: none;
    margin-bottom: 20px;
    padding: 0 10px;
  }

  #portfolio .col-md-3 img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  #portfolio .col-md-3:hover img {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  }

  /* Videos en portfolio */
  .video-portfolio-item {
    flex: 0 0 100% !important;
    max-width: 100% !important;
    margin-bottom: 25px;
    padding: 0 10px;
  }

  .video-wrapper {
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .video-wrapper:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  }

  /* Títulos y texto */
  .portfolio-intro {
    font-size: 15px;
    padding: 20px;
    text-align: center;
  }

  .portfolio-description {
    font-size: 15px !important;
    text-align: left !important;
  }

  .title h2 {
    font-size: 24px !important;
    margin-bottom: 15px;
  }

  .title h4 {
    font-size: 18px !important;
    margin-bottom: 20px;
  }

  .video-title {
    font-size: 20px !important;
    margin-bottom: 25px;
    color: #27ae60;
    font-weight: 600;
  }

  /* Timeline mejorado */
  .timeline-modern {
    gap: 15px;
    margin-bottom: 25px;
  }

  .timeline-modern-item {
    padding: 15px 10px 20px 10px;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  .timeline-modern-content h3 {
    font-size: 16px;
  }

  .timeline-modern-content div,
  .timeline-modern-content p {
    font-size: 14px;
  }

  .timeline-modern-date {
    font-size: 12px;
    padding: 4px 8px;
  }

  /* Formulario */
  .form-control {
    font-size: 16px;
    padding: 12px 15px;
  }

  /* Espaciado general */
  .container {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media (max-width: 480px) {
  .container { padding-left: 10px; padding-right: 10px; }

  .team-item { margin-bottom: 20px; border-radius: 10px; }
  .team-item img { height: 220px !important; }
  .team-des { padding: 18px 15px !important; }
  .team-des h4 { font-size: 16px !important; }
  .team-des h3 { font-size: 14px !important; }

  #portfolio .col-md-3 { padding: 0 5px; margin-bottom: 18px; }
  #portfolio .col-md-3 img { height: 180px; border-radius: 10px; }

  .video-portfolio-item { padding: 0 5px; margin-bottom: 20px; }
  .video-wrapper { border-radius: 10px; }

  .title h2 { font-size: 20px !important; }
  .title h4 { font-size: 16px !important; }
  .video-title { font-size: 18px !important; }

  .portfolio-intro { font-size: 14px; padding: 15px; }
  .portfolio-description { font-size: 14px !important; }

  .form-control { font-size: 16px; padding: 10px 12px; }
  .google-form-wrapper iframe { height: 600px !important; }
}

#intro {
  padding: 80px 0;
  background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
              url('images/pattern-bg.jpg') center center;
  background-size: cover;
}
#intro h2 { font-size: 32px; font-weight: 700; margin-bottom: 20px; color: #333; }
#intro h4 { color: #27ae60; font-size: 18px; font-weight: 600; margin-bottom: 25px; }
.intro-text { margin-bottom: 40px; }
.intro-text p { font-size: 16px; line-height: 1.8; color: #555; }
.skills-section { margin-top: 30px; }
.skill-item { text-align: center; padding: 20px 15px; transition: all 0.3s ease; }
.skill-item:hover { transform: translateY(-5px); }
.skill-icon {
  font-size: 36px; color: #27ae60; margin-bottom: 15px; height: 70px; width: 70px; line-height: 70px;
  border-radius: 50%; background: #f9f9f9; display: inline-block; box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.skill-item h4 { font-size: 17px; font-weight: 600; margin-bottom: 10px; color: #333; }
.skill-item p { font-size: 14px; color: #666; }
    </style>
  </section>

  <!-- estudios section -->
  <section id="estudios">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h2>FORMACIÓN ACADÉMICA:</h2>
          <hr>
          <?php render_timeline($academics); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- work section -->
  <section id="work">
    <div class="container">
      <div class="row"></div>
      <div class="col-md-12 col-sm-12">
        <h2>EXPERIENCIA LABORAL:</h2>
        <hr>
        <?php render_timeline($jobs); ?>
      </div>

      <style>
      .timeline-modern {
        display: flex;
        flex-direction: column;
        gap: 32px;
        margin-top: 20px;
        margin-bottom: 40px;
        position: relative;
      }
      .timeline-modern-item {
        display: flex;
        align-items: flex-start;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(39, 174, 96, 0.08);
        padding: 18px 12px 28px 12px;
        position: relative;
        transition: box-shadow 0.2s;
        border-left: 4px solid #27ae60;
        margin-bottom: 0;
      }
      .timeline-modern-item:hover {
        box-shadow: 0 4px 16px rgba(39, 174, 96, 0.15);
      }
      .timeline-modern-icon {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        background: #27ae60;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 14px;
        box-shadow: 0 2px 8px rgba(39, 174, 96, 0.12);
        margin-top: 2px;
      }
      .timeline-modern-content { flex: 1; min-width: 0; }
      .timeline-modern-date {
        display: inline-block;
        font-size: 13px;
        color: #27ae60;
        font-weight: 600;
        margin-bottom: 6px;
        background: #eafaf1;
        padding: 3px 8px;
        border-radius: 6px;
        word-break: break-word;
      }
      .timeline-modern-content h3 {
        margin: 6px 0 4px 0;
        font-size: 17px;
        font-weight: bold;
        color: #222;
        word-break: break-word;
      }
      .timeline-modern-content div {
        font-weight: 600;
        color: #555;
        margin-bottom: 6px;
        font-size: 15px;
      }
      .timeline-modern-content p {
        margin-bottom: 0;
        font-size: 14px;
        color: #444;
        word-break: break-word;
      }
      @media (max-width: 991px) {
        .timeline-modern-item { flex-direction: column; align-items: flex-start; padding: 14px 8px 24px 8px; }
        .timeline-modern-icon { margin-bottom: 8px; margin-right: 0; }
      }
      @media (max-width: 600px) {
        .timeline-modern { gap: 18px; margin-bottom: 24px; }
        .timeline-modern-item { padding: 10px 4px 18px 4px; border-radius: 8px; }
        .timeline-modern-content h3 { font-size: 15px; }
        .timeline-modern-content div, .timeline-modern-content p { font-size: 13px; }
        .timeline-modern-date { font-size: 12px; padding: 2px 6px; }
      }
      </style>
    </div>
  </section>

  <!-- team section -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 title">
          <h2 style="text-align: center;"><?= $team['title_html'] ?></h2>
          <hr>
          <p><?= h($team['desc']) ?></p>
        </div>

        <?php render_team_slider($team['slider1']); ?>
        <?php render_team_slider($team['slider2'], 'reverse-slider'); ?>

        <style>
        .reverse-slider .team-slider { animation: scroll-slider-reverse 25s linear infinite; }
        @keyframes scroll-slider-reverse {
          0% { transform: translate3d(calc(-300px * 10), 0, 0); }
          100% { transform: translate3d(0, 0, 0); }
        }
        </style>

      </div>

      <style>
      .team-slider {
        display: flex;
        flex-wrap: nowrap;
        gap: 20px;
        padding-bottom: 10px;
        width: max-content;
        will-change: transform;
        animation: scroll-slider 25s linear infinite;
      }
      .team-item { flex: 0 0 280px; position: relative; transition: transform 0.3s ease; }
      .team-item:hover { transform: translateY(-5px); }
      .team-item img { width: 100%; height: 200px; object-fit: cover; border-radius: 5px; }
      @keyframes scroll-slider {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(calc(-300px * 10), 0, 0); }
      }
      </style>

      <style>
      .team-des {
        padding: 14px 20px;
        background: rgba(0, 0, 0, 0.45);
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
        overflow: visible;
      }
      .team-des h4, .team-des h3 {
        margin: 6px 0;
        font-size: 16px;
        line-height: 2;
        white-space: normal;
        overflow: visible;
        text-overflow: clip;
        padding: 0;
        word-break: break-word;
        color: #fff;
      }
      h4 {
        line-height: 2;
        white-space: normal;
        word-break: break-word;
        overflow: visible;
        text-overflow: clip;
      }
      .team-des h4 { font-size: 17px; font-weight: 700; }
      @media (max-width: 768px) {
        #team .title h2 {
          font-size: 26px !important;
          color: #27ae60;
          margin-bottom: 20px;
          text-align: center;
          font-weight: 700;
        }
        .team-slider-container + .team-slider-container { margin-top: 30px; }
        .team-slider-container::before {
          content: "📍 Lugares visitados";
          display: block;
          text-align: center;
          font-size: 16px;
          font-weight: 600;
          color: #27ae60;
          margin-bottom: 15px;
          padding: 10px;
          background: rgba(39, 174, 96, 0.1);
          border-radius: 20px;
          border: 2px solid rgba(39, 174, 96, 0.2);
        }
        .reverse-slider::before { content: "🌍 Más destinos"; }
      }
      </style>

      <style>
      .team-slider-container {
        width: 100%;
        overflow: hidden;
        padding: 20px 0;
        position: relative;
      }
      .team-slider:hover { animation-play-state: paused; }
      .team-slider-container::-webkit-scrollbar { height: 8px; }
      .team-slider-container::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
      .team-slider-container::-webkit-scrollbar-thumb { background: #27ae60; border-radius: 10px; }
      .team-slider-container::-webkit-scrollbar-thumb:hover { background: #219653; }
      </style>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        const sliders = document.querySelectorAll('.team-slider');
        sliders.forEach(slider => {
          const items = slider.querySelectorAll('.team-item');
          for (let i = 0; i < 3; i++) {
            items.forEach(item => slider.appendChild(item.cloneNode(true)));
          }
        });
      });
      </script>

    </div>
  </section>

  <!-- portfolio section -->
  <div id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 title">
          <h2 class="wow fadeInDown portfolio-main-title"><?= h($portfolio['title']) ?></h2>
          <hr class="portfolio-divider">
          <h4 class="wow fadeIn portfolio-subtitle" data-wow-delay="0.3s"><?= h($portfolio['subtitle']) ?></h4>
          <div class="portfolio-intro wow fadeIn" data-wow-delay="0.6s">
            <p class="portfolio-description"><?= h($portfolio['desc']) ?></p>
          </div>
        </div>

        <style>
        .portfolio-main-title {
          font-size: 36px; font-weight: 700; color: #2c3e50;
          text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px;
          text-shadow: 2px 2px 4px rgba(0,0,0,0.1); position: relative;
        }
        .portfolio-main-title::after {
          content: ''; position: absolute; bottom: -10px; left: 50%;
          transform: translateX(-50%); width: 60px; height: 3px;
          background: linear-gradient(45deg, #27ae60, #2ecc71); border-radius: 2px;
        }
        .portfolio-divider {
          border: none; height: 2px;
          background: linear-gradient(90deg, transparent, #27ae60, transparent);
          margin: 30px auto; width: 80%;
        }
        .portfolio-subtitle {
          font-size: 20px; font-weight: 600; color: #27ae60;
          font-style: italic; margin-bottom: 25px;
          text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
        }
        .portfolio-intro {
          background: linear-gradient(135deg, #f8f9fa, #e9ecef);
          padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);
          border-left: 4px solid #27ae60; margin-bottom: 40px;
        }
        .portfolio-description {
          font-size: 16px; line-height: 1.8; color: #495057;
          margin: 0; font-weight: 400; text-align: justify;
        }
        @media (max-width: 768px) {
          .portfolio-main-title { font-size: 28px; letter-spacing: 1px; text-align: center; }
          .portfolio-subtitle { font-size: 18px; text-align: center; }
          .portfolio-intro { padding: 20px; margin-bottom: 30px; }
          .portfolio-description { font-size: 15px; }

          #portfolio .col-md-3 { position: relative; overflow: hidden; }
          #portfolio .col-md-3 a { display: block; position: relative; overflow: hidden; border-radius: 12px; }
          #portfolio .col-md-3 a::after {
            content: '🔍 Ver imagen';
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(39, 174, 96, 0.9);
            color: white; padding: 8px 15px; border-radius: 20px;
            font-size: 14px; font-weight: 600; opacity: 0;
            transition: opacity 0.3s ease; white-space: nowrap;
          }
          #portfolio .col-md-3:hover a::after { opacity: 1; }
          .video-section::before {
            content: ''; display: block; height: 3px;
            background: linear-gradient(90deg, transparent, #27ae60, transparent);
            margin: 30px auto 40px; width: 50%; border-radius: 2px;
          }
        }
        </style>

        <!-- Video Section -->
        <div class="col-md-12 col-sm-12 video-section">
          <h3 class="video-title">Producciones Audiovisuales</h3>

          <div class="video-portfolio-grid">
            <?php foreach ($portfolio['videos'] as $v): ?>
              <div class="col-md-3 col-sm-6 video-portfolio-item wow fadeIn" data-wow-delay="<?= h($v['delay']) ?>">
                <div class="video-wrapper">
                  <iframe
                    src="https://www.youtube.com/embed/<?= h($v['id']) ?>"
                    title="<?= h($v['title']) ?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <style>
        .video-section { margin: 40px 0; text-align: center; }
        .video-title { font-size: 24px; font-weight: 600; color: #27ae60; margin-bottom: 30px; }
        .video-portfolio-grid { display: flex; flex-wrap: wrap; margin: 0 -15px; }
        .video-portfolio-item { padding: 0 15px; margin-bottom: 30px; transition: transform 0.3s ease; }
        .video-portfolio-item:hover { transform: translateY(-5px); }
        .video-wrapper {
          position: relative; width: 100%; height: 0; padding-bottom: 56.25%;
          overflow: hidden; border-radius: 8px;
          box-shadow: 0 4px 15px rgba(0,0,0,0.1);
          transition: box-shadow 0.3s ease;
        }
        .video-wrapper:hover { box-shadow: 0 8px 25px rgba(0,0,0,0.15); }
        .video-wrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 8px; }
        @media (max-width: 991px) { .video-portfolio-item { flex: 0 0 50%; max-width: 50%; } }
        @media (max-width: 767px) { .video-portfolio-item { flex: 0 0 100%; max-width: 100%; } }
        </style>

        <div class="col-md-12 col-sm-12"></div>

        <?php foreach ($portfolio['gallery'] as $g): ?>
          <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.6s">
            <a href="<?= h($g['img']) ?>" data-lightbox-gallery="portfolio-gallery" <?= isset($g['title']) ? 'title="'.h($g['title']).'"' : '' ?>>
              <img src="<?= h($g['img']) ?>" alt="<?= h($g['alt']) ?>">
            </a>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

  <!-- contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 title">
          <h2><?= h($contact['title']) ?></h2>
          <hr>
          <p><?= h($contact['desc']) ?></p>
        </div>

        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 contact-form wow fadeInUp" data-wow-delay="0.9s">
          <div class="google-form-wrapper">
            <iframe
              src="<?= h($contact['google_form']) ?>"
              width="100%"
              height="<?= (int)$contact['iframe_height'] ?>"
              frameborder="0"
              marginheight="0"
              marginwidth="0">Cargando…</iframe>
          </div>

          <style>
          .google-form-wrapper {
            width: 100%;
            max-width: 640px;
            margin: 0 auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
          }
          .google-form-wrapper iframe {
            display: block;
            border: none;
            border-radius: 8px;
          }
          @media (max-width: 767px) {
            .google-form-wrapper { max-width: 100%; margin: 0; }
            .google-form-wrapper iframe { height: 800px; }
          }
          @media (max-width: 480px) {
            .google-form-wrapper iframe { height: 700px; }
          }
          </style>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h2 class="wow fadeIn" data-wow-delay="0.9s"><?= h($footer['heading']) ?></h2>
          <ul class="social-icon">
            <li>
              <a href="<?= h($footer['facebook']) ?>"
                 class="fa fa-facebook wow bounceIn"
                 data-wow-delay="0.3s"
                 title="Facebook"
                 aria-label="Facebook"></a>
            </li>
          </ul>
        </div>

        <div class="col-md-12 col-sm-12 copyright">
          <p><?= h($footer['copyright']) ?>
            | Desarrollo Github:
            <a href="<?= h($footer['github']['url']) ?>" target="_blank" rel="noopener noreferrer"><?= h($footer['github']['label']) ?></a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- JAVASCRIPT JS FILES -->
  <?php foreach ($scripts as $src): ?>
    <script src="<?= h($src) ?>"></script>
  <?php endforeach; ?>

</body>
</html>
