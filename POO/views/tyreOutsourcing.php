<?php 
  include("includes/header_include.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Outsourcing</title>
  

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
 
  <link href="../assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/elementos/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/elementos/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/elementos/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/elementos/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/elementos/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">


  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/moment.min.js"></script>

  <link rel="stylesheet"  href="../assets/css/fullcalendar.min.css">
  <script src="../assets/js/fullcalendar.min.js"></script>
  <script src="../assets/js/es.js"></script>
  <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script src="../assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/elementos/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/elementos/php-email-form/validate.js"></script>
  <script src="../assets/elementos/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/elementos/venobox/venobox.min.js"></script>
  <script src="../assets/elementos/owl.carousel/owl.carousel.min.js"></script>

  <script src="../assets/js/main.js"></script>
</head>
<body>
<header id="" style="background-color: #fff" class="fixed-top ">
  	
    <div class="container d-flex align-items-center">
      
      <h1 class="logo mr-auto"><a href="../../index.php" style="color: #0082c3" >Tyre</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a style="color: #444444" href="../../index.php">Inicio</a></li>
          <li><a style="color: #444444" href="#about">Nosotros</a></li>
          <li><a style="color: #444444" href="#portfolio">Servicios</a></li>
          <li><a style="color: #444444" href="#team">Team</a></li>
          <li><a style="color: #444444" href="#cta" >Blog</a></li>
          <li><a style="color: #444444" href="#contact">Contacto</a></li>
          <?php 
          if($detect->isMobile() == true){
            if(!isset($_SESSION['sesion'])){
            ?>
            <li><a href="login.php" style="color: #444444">Iniciar Sesión</a></li>
            <li><a href="register.php" style="color: #444444">Registro</a></li>
            <?php
            }else{
              ?>
              <li><a href="../si/logout.php" style="color: #444444">Cerrar Sesión</a></li>
              <?php
            }
          }else{
            if(!isset($_SESSION['sesion'])){
            ?>
            <li><a href="login.php"><i style="font-size: 25px; color: #444444" title="INICIO DE SESIÓN" class='bx bx-user-circle bx-spin-hover' ></i></a></li>
            <li><a href="register.php"><i style="font-size: 25px; color: #444444" title="REGISTRARSE" class='bx bxs-user-circle bx-spin-hover'></i></a></li>
            <?php
            }else{
              ?>
              <li><a href="../si/logout.php"><i style="font-size: 25px; color: #444444" title="CERRAR SESIÓN" class='bx bx-log-out bx-spin-hover' ></i></a></li>
              <?php
            }
          }; ?>
        </ul>
      </nav>

    </div>
  </header>
  <main id="main">
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>ESPECIALIZADO OUTSORCING</h2>
          <h3>Tyre<span> Especializado Outsorcing </span></h3>
          <p>Con campaña fisica programada <br>
				45 min.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Con este servicio se busca establecer además del plan estratégico de mercadeo, el desarrollo de campañas física y el manejo de redes sociales y contenido; todo esto con el uso de la tecnología experiencial y sensorial; con el fin de interactuar con los usuarios, cumplir con las métricas establecidas y lograr una tasa de retorno en el área. 
            <br>
            Adicionalmente, nos concentramos en el manejo de la página web, CRM y la capacitación en las áreas que trabajan en conjunto al mercadeo, tales como:  servicio al cliente, ventas y finanzas  
            </p>
            <a href="#" style="color: #0082c3; font-size: 20px"><u>Más Información</u></a>
            
            <br><br><br>
            <h3>Datos de contacto</h3>
            <p><strong>Correo:  </strong> info@tyreagencia.com</p>
            <div>
    <div>
      <div>
        <!-- Ubicacion del calendario -->
        <?php if($sesion != ''){ ?>
        <div id="CalendarioWeb" class="tabla"></div>
        <?php }else{ ?>
          <h5> Para agendar una cita, necesitas haber iniciado sesión.</h5>
          <h5> Para iniciar sesión haz <a href="login.php">click aquí.</a></h5>
        <?php } ?>
      </div>
    </div>
  </div>
 <!-- Creacion del calendario con js -->
  <script>
    $(document).ready(function(){
      $('#CalendarioWeb').fullCalendar({
        //Cabezera calendario
        header:{
          left:'today,prev,next',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        //accion al dar click en el dia
        dayClick:function(date, jsEvent, view){
          limpiarFormulario();
          //alert("Valor seleccionado:"+date.format());
          //alert("Vistas actual:"+view.name);
          //$(this).css('background-color','white');
          $('#txtFechaInicio').val(date.format());
          $('#txtFechaFin').val(date.format());
          $("#modalEventos").modal();
        },
          events:'../si/eventos.php',

        eventClick:function(calEvent,jsEvent,view){
          //titulo en h2
          $('#tituloEvento').html(calEvent.title);
          //Informacion del evento
          $('#txtUsuario').val(calEvent.usuario);
          $('#txtId').val(calEvent.id);
          $('#txtDescripcion').val(calEvent.descripcion);
          $('#txtTitulo').val(calEvent.title);
          $('#txtColor').val(calEvent.color);

          //Trae el campo start de la base de datos con formato datetime, lo cambiar de formato y lo divide en 2, el cual guarda en _i y lo divide en 2, la primera parte es 0 que pongo como fecha y la segunda parte 1 que pongo como hora
          FechaHoraInicio = calEvent.start._i.split(" ");
          $('#txtFechaInicio').val(FechaHoraInicio[0]);
          $('#txtHoraInicio').val(FechaHoraInicio[1]);

          /*
          error fechas
          fechahorafin = calevent.end._i.split(" ");
          $('#txtfechafin').val(fechahorafin[0]);
          $('#txthorafin').val(fechahorafin[1]);*/

          $("#modalEventos").modal();
        },
        editable:true,
        eventDrop:function(calEvent){
          //$('#txtUsuario').val(calEvent.usuario);
          $('#txtId').val(calEvent.id);
          $('#txtTitulo').val(calEvent.title);
          $('#txtColor').val(calEvent.color);
          $('#txtDescripcion').val(calEvent.descripcion);

          var FechaHoraInicio = calEvent.start.format().split("T");
          $('#txtFechaInicio').val(FechaHoraInicio[0]);
          $('#txtHoraInicio').val(FechaHoraInicio[1]);

          RecolectarDatos();
          EnviarInformacion('modificar',NuevoEvento,true);
        }


        });
    });
  </script>
  <!-- Modal agregar,modificar,eliminar-->
  <div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="ModalTitulo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php 
          echo '<input type="hidden" id="txtUsuario" value="'."$sesion".'" >';
          ?>
          <input type="hidden" id="txtId" name="txtId"/>
          <input type="hidden" id="txtFechaInicio" name="txtFechaInicio" />
          <div class="form-row">
            <div class="form-group">
              <!--<label>Titulo:</label> -->
              <input type="text" id="txtTitulo" class="form-control" placeholder="Titulo del evento" hidden/>
            </div>
            <div class="form-group col-md-4">
              <label>Hora Inicio: </label>
              <input type="time" id="txtHoraInicio" value="12:00" class="form-control"/>
            </div>
          </div>
          <div class="form-group">
            <label>Descripcion:</label>
            <textarea id="txtDescripcion" rows="3" class="form-control"></textarea>
          </div>
          <br>
          <div class="form-group">
            <label>Color del evento:</label>
            <input type="color" value="ff0000" id="txtColor" class="form-control" style="height:32px">
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <!-- <label>Fecha Fin:</label> -->
              <input type="date" id="txtFechaFin" name="txtFechaFin" class="form-control" hidden/>
            </div>
            <div class="form-group col-md-3">
              <!-- <label>Hora Fin:</label> -->
              <input type="time" id="txtHoraFin" value="01:00" class="form-control" hidden/>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<script>
  var NuevoEvento;
  //para agregar en la base de datos
  $('#btnAgregar').click(function(){
    RecolectarDatos();
    EnviarInformacion('agregar',NuevoEvento);
  });
  //para eliminiar en la base de datos
  $('#btnEliminar').click(function(){
    RecolectarDatos();
    EnviarInformacion('eliminar',NuevoEvento);
  });
  //para modificar en la base de datos
  $('#btnModificar').click(function(){
    RecolectarDatos();
    EnviarInformacion('modificar',NuevoEvento);
  });
  function RecolectarDatos(){
      NuevoEvento = {
      usuario:$('#txtUsuario').val(),
      id:$('#txtId').val(),
      title:$('#txtTitulo').val(),
      hora:$('#txtHoraInicio').val(),
      color:$('#txtColor').val(),
      descripcion:$('#txtDescripcion').val(),
      textColor:"#FFFFFF"
    };
  }
  function EnviarInformacion(accion,objEvento,modal){
    //ajax sirve para enviar la informacion sin que se recargue la pagina
    $.ajax({
      type:'POST',
      url:'../si/eventos.php?accion='+accion,
      data:objEvento,
      success:function(msg){
        if(msg){
          $('#CalendarioWeb').fullCalendar('refetchEvents');
          if(!modal){
            $("#modalEventos").modal('toggle');
            $("#confirmacionCita").modal();
          }
        }
      },
      error:function(){
        alert("Hay un error ..");
      }
    });
  }

  function limpiarFormulario(){
          $('#txtId').val('');
          $('#txtTitulo').val('');
          $('#txtColor').val('');
          $('#txtDescripcion').val('');
  }
</script>
        <?php if($sesion != ''){ ?>
          <a href="#" class="btn-learn-more">ELIMINAR DATOS</a>
        <?php } ?>
          </div>
            
          </div>


          <!-- <div class="col-lg-6 pt-4 pt-lg-0">
           <iframe width="700" height="687" src="https://www.youtube.com/embed/WJUInYShJYo?list=RDHgzGwKwLmgM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div> -->
        </div>

      </div>
    </section>

  <div class="modal fade" id="confirmacionCita" tabindex="-1" role="dialog" aria-labelledby="ModalTitulo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group">
              <label>Su cita fue agendada, en este momento esta a la espera de la confirmacion de la misma.</label>
              <br>
              <label>Una vez su cita sea confirmada, se le notificara via correo electronico y la vera reflejada en el calendario.</label>
            </div>
          </div>
          <div class="form-row">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
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

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Enlaces</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#hero">Inicio</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#main">Nosotros</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#portfolio">Servicios</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#team">Team</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../../index.php#cta" style="color: #ffd21f"	><strong>BLOG</strong></a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Nuestros Servicios</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="tyreEspfisico.php">Tyre Especializado Fisico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="tyreEspvirtual.php">Tyre Especializado Virtual</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="tyreOutsourcing.php">Tyre Outsourcing</a></li>
        </ul>
      </div>


    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
     <strong><span>Tyre</span></strong> 2020 &copy; Copyright . All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a style="color: #19ce16" href=""><strong>Software Engineering 5 of Uniempresarial</strong></a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="https://www.facebook.com/Tyreagencia/" target="_blank" class="facebook"><i class="bx bxl-facebook bx-burst-hover"></i></a>
    <a href="https://www.instagram.com/tyreagencia/" target="_blank" class="instagram"><i class="bx bxl-instagram bx-burst-hover"></i></a>
    <a href="https://www.linkedin.com/company/tyrelitebrand/" target="_blank" class="linkedin"><i class="bx bxl-linkedin bx-burst-hover"></i></a>
  </div>
</div>
</footer>
</body>
</html>