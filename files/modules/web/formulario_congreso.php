<?php
  if (isset($_POST['email']))  {

    //$AdminEmail = "administracion@amha.org.ar";
    $AdminEmail = "congreso2018@amha.org.ar";
    $AdminEmail2 = "romero.m.alejandro@gmail.com";
    $Name = $_POST['first_name'].' '.$_POST['last_name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Address = $_POST['address'];
    $Message = $_POST['message'];
    $Subject = "Formulario de pre inscripcion congreso FAMHA";
    $Msg .= 'Remitente: <b>'.$Name.'</b><br>';
    $Msg .= 'Tel&eacute;fono: <b>'.$Phone.'</b><br>';
    $Msg .= 'Email: <b><a href="https://mail.google.com/mail/?view=cm&fs=1&to='.$Email.'">'.$Email.'</a></b><br>';
    $Msg .= 'Direcci&oacute;n: <b>'.$Address.'</b><br><br>';
    $Msg .= 'Consulta: <b>'.$Message.'</b><br>';
    $Msg .= '<br><br><br><b>Este email ha sido generado autom&aacute;ticamente desde el sitio web de la AMHA.</b>';

    // $Headers  = "From: ".$Name." < ".$Email." >\n";
    // $Headers .= "X-Sender: AMHA website < ".$AdminEmail." >\n";
    // $Headers .= 'X-Mailer: PHP/' . phpversion();
    // $Headers .= "X-Priority: 2\n"; // Urgent message!
    // $Headers .= "Return-Path: ".$AdminEmail."\n"; // Return path for errors
    // $Headers .= "MIME-Version: 1.0\r\n";
    // $Headers .= "Content-Type: text/html; charset=utf-8\n";
    /////////////////// PHP Mailer //////////////////
    require '../../../vendors/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->setFrom($AdminEmail, 'Congreso AMHA');
    $mail->addAddress($AdminEmail, 'Congreso AMHA');
    $mail->Subject = $Subject;
    $mail->isHTML(true);
    $mail->Body = $Msg;
    if(!$mail->send()) {
      echo 'Mailer error: ' . $mail->ErrorInfo;
    }

    $mail = new PHPMailer;
    $mail->setFrom($AdminEmail, 'Congreso AMHA');
    $mail->addAddress($AdminEmail2, 'Congreso AMHA');
    $mail->Subject = $Subject;
    $mail->isHTML(true);
    $mail->Body = $Msg;
    if(!$mail->send()) {
      echo 'Mailer error: ' . $mail->ErrorInfo;
    }
    //
    // //send email
    // mail($AdminEmail, "$Subject", $Msg, $Headers);
    // mail($AdminEmail2, "$Subject", $Msg, $Headers);
    include("../../classes/class.database.php");
    $DB = new DataBase();
    $DB->Connect();
    //$DB->execQuery("INSERT","inscription_form_message","name,email,phone,career,sex,document,occupation,message,creation_date","'".addslashes($Name)."','".addslashes($Email)."','".addslashes($Phone)."','".addslashes($Career)."','".addslashes($Sex)."','".addslashes($Document)."','".addslashes($Occupation)."','".addslashes($_POST['msg'])."',NOW()");
    $DB->execQuery("INSERT","inscription_congress","first_name,last_name,address,email,phone,message,creation_date","'".addslashes($_POST['first_name'])."','".addslashes($_POST['last_name'])."','".addslashes($Address)."','".addslashes($Email)."','".addslashes($Phone)."','".addslashes($Message)."',NOW()");
    //echo $DB->lastQuery();
    die();
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
  <style type="text/css">
    .row-table {
      display: table;
      background-color:white;
    }

    .row-table .col-header {
      background-color: #726961;
      color:white;
      font-weight:bold;
    }



    .row-table [class*="col-"] {
        float: none;
        display: table-cell;
        vertical-align: middle;
    }

    .pre-header {
      font-weight:bold;
      color:#1b5c77;
    }
  </style>
</head>
  <body>
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer"><!-- Content inside this div -->
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.cursos.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1 class="txC">12º Congreso FAMHA<br>Homeopatia, paradigma del SXXI</h1>
            <hr>
            <h4 class="txC">Del 24 al 27 de Octubre de 2018</h4>
            <!-- <h4 class="txC">Formulario de Pre-Inscripci&oacute;n</h4> -->
            <hr>
          </div>
          <div class="form-info">
            <p class="txL">
              Tenemos el agrado de invitarlo a participar del próximo 12º Congreso FAMHA que se realizará del 24 al 27 de Octubre de 2018.<br><br>
              La organización del mismo se encuentra a cargo de la ASOCIACIÓN MÉDICA HOMEOPÁTICA ARGENTINA.<br><br>
              En el mismo se tratarán los siguientes temas:
              <div class="container">
              <ul>
                <li>Vitalismo del Siglo XXI</li>
                <li>Investigación en Homeopatía</li>
                <li>Nuevas Patogenesias</li>
                <li>Temas Libres</li>
              </ul>
              </div>
              <br>
              El congreso está dirigido a todos los homeópatas y alumnos de las diferentes escuelas de Homeopatía. <!-- Fecha límite de entrega de trabajos: <span class="pre-header">15 de Julio de 2018</span>.-->-<br><br>
              Debido al éxito en la inscripción nos vimos obligados a cambiar de sede.<br>El lugar elegido es el "<b>Círculos de Oficiales de Mar, Sarmiento 1867 CABA</b>" en donde encontraremos el confort para todos los presentes.<br>
              <br>
              Para poder ver el <b>programa</b> completo del 12° CONGRESO FAMHA haga <a href="../../../skin/files/conferences/12_congreso_famha_informacion_amha.pdf" target="_blank"><button class="btn btn-primary btnPColor" type="button">click aquí</button></a>
              <br>

              <!-- Para poder participar, deberá inscribirse previamente: <b><a href="https://mail.google.com/mail/?view=cm&fs=1&to=congreso2018@amha.org.ar">congreso2018@amha.org.ar</b><br>
              <br> -->
              <!-- Reglamento para las presentaciones. <a href="../../../skin/files/conferences/congreso_famha_2018-reglamento_trabajos.pdf" target="_blank"><button class="btn btn-primary btnPColor" type="button">Click Aquí</button></a><br>
              <br>
              Para más información sobre el congreso, <b><a href="../../../skin/files/conferences/12_congreso_famha_informacion_amha.pdf" target="_blank">click aquí</a></b>.<br>
              <br> -->
              <!-- COMPLETE EL FORMULARIO DE CONTACTO PARA RECIBIR MÁS INFORMACIÓN -->
              <!-- <br> -->
              <!-- <span class="pre-header">Valores CONGRESO FAMHA 2018:</span><br>
              <div class="container">
                <ul>
                  <li>Socios: <b>$ 5.500</b>.-</li>
                  <li>Colegiados: <b>$ 4.950</b>.-</li>
                  <li>Alumnos: <b>$ 3.300</b>.-</li>
                </ul>
              </div> -->
            </p>
          </div>
          <!-- <br>
          <div class="form-info txC">
            <h4 class="pre-header">PRIMERA JORNADA ARGENTINA DE AGROHOMEOPATIA - 27 DE OCTUBRE DE 2018</h4>
          </div>
          <div class="form-info">
            <p class="txL">
              La Asociación Médica Homeopática Argentina se enorgullece en invitar a paisajistas, agrónomos y amantes de las plantas a la <b>Primera Jornada de Agrohomeopatía.</b><br>
              <br>
              En ella aprenderá como cuidar las plantas, jardines y cultivos de manera natural, órganica, sin toxicidad para su familia, animales y medio ambiente. También la Agrohomeopatía ha demostrado su utilidad en el incremento del rinde de los cultivos, así como también la reducción y hasta erradicación de los fertilizantes químicos y pesticidas tóxicos en el control de las plagas y enfermedades del agro, redundando en un mayor usufructo económico, una agricultura más ecológica y el consiguiente beneficio para la salud de los consumidores.<br>
              <br>
              Somos la Primera Escuela Argentina y una de las pocas a nivel mundial que han incorporado esta importante área del conocimiento homeopático a sus cursos.<br>
              <br>
              El <b>temario</b> incluye:
              <div class="container">
              <ul>
                <li>Definición y alcances de la <b>Agrohomeopatía</b>, su historia y su futuro.</li>
                <li>Integración <b>planta-suelo.</b></li>
                <li>Repaso de la <b>anatomofisiología</b> vegetal.</li>
                <li>Toma del caso <b>agrohomeopática</b>: Interrogatorio, <b>Semiología agrohomeopática</b> (signos, síntomas)</li>
                <li><b>Jerarquización, repertorización y elección del medicamento.</b></li>
                <li>Síndrome mínimo de valor máximo.</li>
                <li>Dinamización, dosis, <b>esquemas de tratamiento.</b></li>
                <li><b>Fitonosodes</b>, importancia y preparación</li>
              </ul>
              </div>
              <br>
              Dirigido a: Paisajistas, agrónomos, homeópatas y amantes de las plantas.<br>
              <br>
              La producción sustentable es el futuro. Es una necesidad para nuestra salud y la del planeta. Seamos parte del cambio desde la Homeopatía. Aprovechemos la oportunidad para acercarnos a este conocimiento.<br>
              <br>
              FECHA: <b>27 DE OCTUBRE DE 2018</b><br>
              HORARIO: <b>14 a 17 hs.</b><br>
              DISERTANTE: <b>Dr. Gustavo Martello</b><br>
              <span class="pre-header">Para poder participar deberá inscribirse previamente, consulte valores:</span><br>
              Mail: <b><a href="https://mail.google.com/mail/?view=cm&fs=1&to=congreso2018@amha.org.ar">congreso2018@amha.org.ar</a></b><br>
              Teléfonos: <b>(011) 4825-2194 - (011) 4827-2907</b><br>
            </p>
          </div> -->
          <br>
          <!-- <div class="form-info txC">
            <h4 class="pre-header">¡CONGRESO FAMHA : Descuentos y formas de pago!</h4>
          </div> -->
          <!-- <div class="row row-table">
            <div class="col-xs-6 form-info txC col-header">Formas de Pago</div>
            <div class="col-xs-2 form-info txC col-header">Valores Socios</div>
            <div class="col-xs-2 form-info txC col-header">Valores Colegiados</div>
            <div class="col-xs-2 form-info txC col-header">Valores Alumnos</div>
          </div> -->

          <!-- <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Desde ENERO 2018</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 6 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 5.500.-</div>
            <div class="col-xs-2 form-info txC">$ 4.950.-</div>
            <div class="col-xs-2 form-info txC">$ 3.300.-</div>
          </div> -->

          <!-- <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Desde JULIO 2018</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 3 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 5.500.-</div>
            <div class="col-xs-2 form-info txC">$ 4.950.-</div>
            <div class="col-xs-2 form-info txC">$ 3.300.-</div>
          </div> -->

          <div class="sociosLogin">
            <div class="sociosLoginInner">
              <form  id="inscriptionForm" class="form-signin" method="post">
                <div class="form-info">
                  <!-- <h3 class="form-signin-heading">Ingrese su consulta</h3> -->
                  <h3 class="form-signin-heading">Complete el formulario para inscribirse</h3>
                  <hr class="hrStrong">
                  <div class="form-group">
                    <input id="first_name" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Nombre" autofocus="" type="name">
                  </div>
                  <div class="form-group">
                    <input id="last_name" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Apellido" type="name">
                  </div>
                  <div class="form-group">
                    <input id="address" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Domicilio" type="address">
                  </div>
                  <div class="form-group">
                    <input id="phone" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Tel&eacute;fono / Celular" type="tel">
                  </div>
                  <div class="form-group">
                    <input id="email" validateEmpty="Este campo es obligatorio" validateEmail="Ingrese su Email" class="form-control" placeholder="E-Mail" type="email">
                  </div>
                  <div class="form-group">
                    <textarea id="message" class="form-control" placeholder="Ingrese su consulta"></textarea>
                  </div>
                  <button id="send" class="btn btn-lg btn-primary btn-block btnPColor" type="button">Solicitar Inscripci&oacute;n</button>
                </div>
              </form>
              <br>
            </div>
          </div>
        </div><!-- /autoridades -->
        <!-- ////// MODALS //////// -->
        <!-- ////// /MODALS //////// -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <input type="hidden" value="" id="selected_career">
    <input type="hidden" value="" id="selected_sex">
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script type="JavaScript" src="../../js/script.validate.js"></script>
    <script>
      // $(document).ready(function(){
      //   alert($("#selected_career").val()+"ale");
      // });
      // var validate = new ValidateFields();
      // $(function(){
      //   validate.createErrorDivs();
      //   $(validateElements).change(function(){
      //       validate.validateOneField($(this));
      //   });
      // });

      $("#send").click(function(){
        if(validate.validateFields('*'))
        {
          sendMsg();
          $("#send").attr("disabled",true);
        }
      });



      function sendMsg()
      {
        //if($('#career').is(':checked')) { alert($('input[name=career]:checked').val()); }

        var fname = $("#first_name").val();
        var lname = $("#last_name").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();

        $.ajax({
          method: "POST",
          url: "formulario_congreso.php",
          data: { first_name:fname, last_name:lname, email:email, phone:phone ,address:address,message:message},
          success: function(callback){
            if(callback)
            {
              alert("Se produjo un error al enviar el formulario. Por favor, intente de nuevo.");
              $("#send").attr("disabled",false);
              console.log(callback);
            }else{
              $(".sociosLoginInner").html('<br><br><h3 class="form-signin-heading"><b>Hemos recibido el formulario de pre inscripci&oacute;n.<br>Gracias por contactarse.</b></h3><br><br>');
              alert("Formulario enviado correctamente");
            }
          }
        });
      }
    </script>
  </body>
</html>
