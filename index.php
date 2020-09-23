<?php 
include("POO/database/database.php");
require_once ('mobile/Mobile_Detect.php');
$detect = new Mobile_Detect();
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

  <title>Tyre</title>
  

  <link href="POO/assets/img/favicon.png" rel="icon">
  <link href="POO/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,255,255i,600,600i,700,700i|Nunito:300,300i,255,255i,600,600i,700,700i|Poppins:300,300i,255,255i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
 
  <link href="POO/assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="POO/assets/elementos/icofont/icofont.min.css" rel="stylesheet">
  <link href="POO/assets/elementos/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="POO/assets/elementos/remixicon/remixicon.css" rel="stylesheet">
  <link href="POO/assets/elementos/venobox/venobox.css" rel="stylesheet">
  <link href="POO/assets/elementos/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link href="POO/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="fixed-top ">
  	
    <div class="container d-flex align-items-center">
      
      <h1 class="logo mr-auto"><a href="index.php" >Tyre</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#portfolio">Servicios</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#cta" >Blog</a></li>
          <li><a href="#contact">Contacto</a></li>
          <?php 
          if($detect->isMobile() == true){
            if(!isset($_SESSION['sesion'])){
            ?>
            <li><a href="POO/views/login.php">Iniciar Sesión</a></li>
            <li><a href="POO/views/register.php">Registro</a></li>
            <?php
            }else{
              ?>
              <li><a href="POO/si/logout.php">Cerrar Sesión</a></li>
              <?php
            }
          }else{
            if(!isset($_SESSION['sesion'])){
            ?>
            <li><a href="POO/views/login.php"><i style="font-size: 25px" title="INICIO DE SESIÓN" class='bx bx-user-circle bx-spin-hover' ></i></a></li>
            <li><a href="POO/views/register.php"><i style="font-size: 25px" title="REGISTRARSE" class='bx bxs-user-circle bx-spin-hover'></i></a></li>
            <?php
            }else{
              ?>
              <li><a href="POO/si/logout.php"><i style="font-size: 25px" title="CERRAR SESIÓN" class='bx bx-log-out bx-spin-hover' ></i></a></li>
              <?php
            }
          }; ?>
        </ul>
      </nav>

    </div>
  </header>

  
  <section id="hero">
    <div class="hero-container">
      <h3>Bienvenidos A <strong>TYRE</strong></h3>
      <h1>Agencia de Mercado</h1>
      <h2>Más que publicidad, toda una experiencia.</h2>
      
      <a href="#about" class="btn-get-started scrollto">Comenzar</a>
    </div>
  </section>

  <main id="main">

    
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Nosotros</h2>
          <h3>¿Qué <span>Hacemos?</span></h3>
          <p>Vinculamos la tecnología con los sentidos</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Nuestro profesionalismo hará que tengas la mejor experiencia como cliente porque te aseguramos:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Eficacia</li>
              <li><i class="ri-check-double-line"></i> Transparecia</li>
              <li><i class="ri-check-double-line"></i> Calidad</li>
              <li><i class="ri-check-double-line"></i> Creatividad</li>
              <li><i class="ri-check-double-line"></i> Innovación</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Somos un grupo de jóvenes apasionados por la estética, la creatividad, innovación, estar a la vanguardia en tendencias pero sobre todo en generar grandes experiencias, porque creemos que el marketing es el arte de interactuar con las personas por ello creamos TYRE buscando ir más allá de lo convencional, porque sabemos que estamos en un mundo de cambios constantes, para ello proporcionamos experiencias interactivas, tecnológicas, sensoriales y a su vez confiables porque para nosotros la palabra imposible no existe.
            </p>
            <a href="#ctas" class="btn-learn-more">Saber Más</a>
          </div>
        </div>

      </div>
    </section>

    

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <h3>Nuestros <span>Servicios</span></h3>
          <p>Pensando en tus necesidades te ofrecemos los siguientes servicios, y te invitamos a agendar una cita con nosotros para conocer más a fondo cada uno de ellos. </p>
        </div>

  

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="POO/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <a href="POO/views/tyreEspfisico.php">
            <div class="portfolio-info">
              <h4>Tyre Especializado Fisico</h4>
              <p>Servicio</p>
              <a href="POO/views/tyreEspfisico.php" class="details-link" title="Leer Mas"><i class="bx bx-link"></i></a>
            </div>
        	</a>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="POO/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <a href="POO/views/tyreEspvirtual.php">
            <div class="portfolio-info">
              <h4>Tyre Especializado Virtual</h4>
              <p>Servicio</p>
              <a href="POO/views/tyreEspvirtual.php" class="details-link" title="Leer Mas"><i class="bx bx-link"></i></a>
            </div>
        	</a>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="POO/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <a href="POO/views/tyreOutsourcing.php">
            <div class="portfolio-info">
              <h4>Tyre Outsourcing</h4>
              <p>Servicio</p>
              <a href="POO/views/tyreOutsourcing.php" class="details-link" title="Leer Mas"><i class="bx bx-link"></i></a>
            </div>
        	</a>
          </div>


        </div>

      </div>
    </section>
   

    
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3  style="color:  #4a745e; font-family: 'Monoton', cursive; font-size: 10vw; ">NUESTRO</h3>
          <br>
          <h3  style="color:  #4a745e; font-family: 'Monoton', cursive; font-size: 10vw; ">BLOG</h3>
          <a class="cta-btn" href="https://tyrelitebrand.blogspot.com/" target="_blank">ENTRAR</a>
        </div> 

      </div>
    </section>

    
 <section id="ctas" class=" abouts">
     
<div class="container">

        <div class="section-title">
          
          <h3 style="font-size: 60px; color: #ffd21f; font-family: 'Holtwood One SC', serif;letter-spacing: 5px;"><span style="color: #ffd21f">Nuestro método de trabajo</span></h3>
          <p style="font-size: 25px; color: #fff">By Michell León & Diego Buitrago</p>
        </div>

        <div class="row content">
          <div class="col-lg-12">
            <p style="font-size: 25px; color: #fff;">
              Nuestro método ha sido evaluado y revisado, con el fin de contruir la campaña que más se adapten a las necesidades de cada empresa, este método, se rige por los siguientes pasos: 
            </p>
            <ul style="font-size: 25px; color: #fff">
              <li><i class="bx bxs-caret-right-circle"></i> Conoce lo que necesitas: Mediante nuestras citas virtuales puedes conocer cual es el servicio que más se adapta al objetivo de la empresa para de esta forma crear el plan de mercadeo o Brief juntos totalmente GRATIS. </li>
              <li><i class="bx bxs-caret-right-circle"></i> Busca una cotización inmediata: Crea la campaña que buscas desarrollar, mediante nuestro formulario virtual, en el cual definimos el tipo de campaña que buscas desarrollar y con ayuda del plan de mercadeo o Brief que desarrollamos juntos podrás contar con tu cotización en menos de 24 horas, en el correo registrado.</li>
              <li><i class="bx bxs-caret-right-circle"></i> Ten todos los detalles de tu campaña: Mediante tu correo electrónico conoce el paso a paso de como se esta desarrollando tu campaña hasta el momento en que es ejecutada.</li>
              <li><i class="bx bxs-caret-right-circle"></i> Reporte: Al finalizar la campaña fisica o virtual podrás tener acceso al reporte del impacto de la campaña.</li>
              <br>
              <br>
              <li><i class="bx bxs-star"></i> Acompañamiento 24/7: Podrás contar con un chat en esta pagina web, donde tendrás la oportunidad de preguntar en cualquier momento, con una respuesta de máximo 1 hora, todos los días de la semana.​</li>
              <li><i class="bx bxs-star"></i> Trabajamos con Marketing Interactivo, Marketing de atracción, Marketing 5.0 y Marketing social. Buscando que tu empresa se encuentre a la vanguardia de las mejores tendencias en mercadeo.</li>
            </ul>
          </div>
        </div>

      </div>


    </section>
   

    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Preguntas <span>Frecuentes</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">¿Por qué elegir tyre? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Porque impulsamos una identidad empresarial única que genera valor a los clientes a través de los sentidos, tendencias y la tecnología. 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">¿Qué metodos de pago manejan? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Manejamos Daviplata, Nequi, Banco de Bogota y Colpatria.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">¿Cómo nos aliamos con ustedes? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
              En el botón contáctanos llena tus datos y en el asunto especifica “ALIANZA”.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">¿Cómo los contactamos? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
              En el botón contáctanos encontraras nuestro correo electronico y numero de teléfono o nos puedes escribir a nuestras redes sociales y nos estaremos contactando contigo lo más pronto posible.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">¿Qué tipo de tecnología ofrecen?<i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
              Ofrecemos realidad aumentada, 3D, 5D y robótica, con el objetivo de hacer la publicidad más atractiva a través de los sentidos.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">¿Qué precios manejan?<i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
              Los precios van desde los 100.000  en adelante, pero todo varía según las necesidades de cada clientes, además contamos con diferentes planes y descuento, así que no pierdas la oportunidad de cotizar con nosotros.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>


    <section id="team" class="team" >
      <div class="container" style="align-content: center;" >

        <div class="section-title">
          <h2>Team</h2>
          <h3>Nuestro Equipo de <span>Trabajo</span></h3>
          <p>Somos un grupo de jóvenes apasionados, creativos e innovadores dispuestos a ayudarte en lo que necesites para tu empresa.</p>
        </div>

        <div class="row" >

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-1.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/michell.leon159"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/michellleonflorido/"><i class="icofont-instagram"></i></a>
                  <a href="http://linkedin.com/in/michell-vanessa-león-florido-14b4b8146"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Michell León</h4>
                <span>Directora ejecutiva & fundadora</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-2.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/profile.php?id=100007137495318"><i class="icofont-facebook"></i></a>
                  <a href="https://instagram.com/diegobuitrago4?igshid=w9erbx6texmu"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/diego-buitrago-gil-9a1630150"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Diego Buitrago</h4>
                <span>Director de administrativo & fundador</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-4.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/CamiloAndresPovedaOficial"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/elpovedaoficial/?hl=es-la"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/camilo-andres-yaya-poveda-4597001b0/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Camilo Yaya</h4>
                <span>Director de tecnología </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-5.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/jose.maldonadot/ "><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/jodagoma20/"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/jose-gomez-9637251b5/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jose Gomez</h4>
                <span>Director de Diseño </span>
              </div>
            </div>
          </div>


        </div>
        <div class="row">

          
          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-8.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://m.me/Carolina.Rodriguez.CR04"><i class="icofont-facebook"></i></a>
                  <a href="https://instagram.com/carolinee_rg?igshid=giqq2ym8thng"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/carolina-rodríguez19"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Carolina Rodríguez</h4>
                <span>Directora Comercial </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-6.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/felipe.lozano.5667"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/maicolandresacevedo/?hl=es-la"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/luis-felipe-lozano-esguerra-127a311b5"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Luis Lozano</h4>
                <span>Ingeniero de requerimientos</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex i-am-centered">
            <div class="member">
              <div class="member-img">
                <img src="POO/assets/img/team/team-7.jpeg" alt="" width="255" height="255">
                <div class="social">
                  <a href="https://www.facebook.com/luisa.rincon.507"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/luisa.rg/"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/luisa-maria-rincon-garcia-1300361b5"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Luisa Rincón</h4>
                <span>Programadora</span>
              </div>
            </div>
          </div>

          


        </div>
      </div>

      <div class="section-title">
        <p>Sí quieres ser parte de nosotros manda tu hoja de vida a talentohumano@tyreagencia.com </p>
      </div>

    </section>

    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <h3>¡Ey! <span>Contáctanos</span> </h3>
          <p>Puedes comunicarte con nosotros o deja tus datos y nosotros te llamamos</p>
        </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63624.40297640419!2d-74.11355064287926!3d4.6783792093996714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85921810393d%3A0x1d953f644042b03b!2sParque%20Central%20Sim%C3%B3n%20Bol%C3%ADvar!5e0!3m2!1ses!2sco!4v1593880213599!5m2!1ses!2sco"  style="border:0; width: 100%; height: 270px;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Localización:</h4>
                <p>Bogotá D.C</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@tyreagencia.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Tel:</h4>
                <p>+57 322 795 0883 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="POO/si/contactanos.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name_contactanos" class="form-control" id="name_contactanos" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email_contactanos" id="email_contactanos" placeholder="Tu Correo" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject_contactanos" id="subject_contactanos" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="text_contactanos" name="text_contactanos" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>

            <script>
            
            </script>

          </div>

        </div>

      </div>
    </section>

  </main>

  
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Tyre</h3>
        <p>
          Bogota D.C<br>
          COLOMBIA <br><br>
          <strong>Phone:</strong> +57 322 795 0883<br>
          <strong>Email:</strong> info@tyreagencia.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links" style="margin: auto;">
        <h4>Enlaces</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#hero">Inicio</a></li>
        </ul>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#main">Nosotros</a></li>
        </ul>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Servicios</a></li>
        </ul>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
        </ul>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#cta" style="color: #ffd21f"	><strong>BLOG</strong></a></li>
        </ul>
      </div>
          
          
          
          
        

      <div class="col-lg-3 col-md-6 footer-links" style="margin: auto;">
        <h4>Nuestros Servicios</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="POO/views/tyreEspfisico.php">Tyre Especializado Fisico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="POO/views/tyreEspvirtual.php">Tyre Especializado Virtual</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="POO/views/tyreOutsourcing.php">Tyre Outsourcing</a></li>
        </ul>
      </div>


    </div>
  </div>
</div>
<script>
var alto = screen.width;
var ancho = screen.height;
var div = 0;

if(alto == 1280 && ancho == 1024){
  var div = "<div class="+'"social-links text-center text-md-right"'+"style="+'"margin-bottom: 7vw;"'+">";
}else if(alto < 500 && ancho < 1024){
  var div = "<div class="+'"social-links text-center text-md-right"'+"style="+'"margin-bottom: 15vw;"'+">";
}else{
  var div = "<div class="+'"social-links text-center text-md-right"'+"style="+'"margin-bottom: 7vw;"'+">";
}
</script>


<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
     <strong><span>Tyre</span></strong> 2020 &copy; Copyright . All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a style="color: #19ce16" href=""><strong>Software Engineering 5 of Uniempresarial</strong></a>
    </div>
  </div>
  
  
    <?php 
      $div = "<script> document.writeln(div); </script>"; 
      echo $div;
    ?>
    <a href="https://www.facebook.com/Tyreagencia/" target="_blank" class="facebook"><i class="bx bxl-facebook bx-burst-hover"></i></a>
    <a href="https://www.instagram.com/tyreagencia/" target="_blank" class="instagram"><i class="bx bxl-instagram bx-burst-hover"></i></a>
    <a href="https://www.linkedin.com/company/tyrelitebrand/" target="_blank" class="linkedin"><i class="bx bxl-linkedin bx-burst-hover"></i></a>
  </div>
</div>
</footer>


<?php 
  if($detect->isMobile() == true){?>
    <div>
    <a href="#" class="back-to-top" style="right: 25px; bottom: 80px;"><i title="Volver A El Inicio" style="background-color: #yellow; width: 50px; font-size: 20px; height: 50px;" class="ri-arrow-up-line"></i></a>
    </div>
    <div>
    <a href="#contact" style="right: -60px;" class="chat scrollto"><i title="Chatea Con Nosotros" style="background-color: #44d649; width: 20vw; font-size: 20px; height: 50px; margin-right: 80px" class='bx bxs-chat'></i></a>
    </div>
    <?php }else{ ?>
    <a href="#" class="back-to-top"><i title="Volver A El Inicio" class="ri-arrow-up-line"></i></a>
    <a href="#contact" style="right: 100px; " class="chat scrollto"><i title="Chatea Con Nosotros" style="background-color: #44d649; width:16vw" class='bx bxs-chat bx-tada-hover'></i></a>
  <?php }?>

  

  
  <script src="POO/assets/elementos/jquery/jquery.min.js"></script>
  <script src="POO/assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="POO/assets/elementos/jquery.easing/jquery.easing.min.js"></script>
  <script src="POO/assets/elementos/php-email-form/validate.js"></script>
  <script src="POO/assets/elementos/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="POO/assets/elementos/venobox/venobox.min.js"></script>
  <script src="POO/assets/elementos/owl.carousel/owl.carousel.min.js"></script>

  <script src="POO/assets/js/main.js"></script>

</body>

</html>