<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
</head>
  <body>
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer">
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.cursos.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12">
          <br>
          <div class="sectionTits"><h3 class="txC">Carreras</h3></div>
          <hr>
          <!-- Content inside this div -->
          <div class="container textSection">
            <div class="row">
              <h1 class="txC">Carrera de Farmacia Homeop&aacute;tica</h1>
              <p class="justify">
                <hr>
                <b>Curso:</b> Farmacia Homeop&aacute;tica <br>
                <b>Dirigido a:</b> Farmac&eacute;utico<br>
                <b>Duraci&oacute;n:</b> 4 meses<br>
                <b>D&iacute;as de cursada:</b> Lunes<br>
                <b>Comienza:</b> Abril - <b>Finaliza:</b> Agosto<br>
                <b>Requisitos:</b> Ser Farmac&eacute;utico. Presentar fotocopia autenticada y en tama&ntilde;o reducido de ambas caras del t&iacute;tulo y fotocopia de ambas caras de la matr&iacute;cula. Fotos carnet: 2 (dos)<br><br>

                <b>Fecha de inicio:</b> Lunes 22 de abril de 2019<br>
                <b>Horario:</b> Lunes de 20.30 a 22.30 hs.<br>
                <b>Examen final:</b> Lunes 13 de agosto, 20:30 hs.<br>
                <b>Requisitos:</b> Ser Farmac&eacute;utico. Presentar fotocopia autenticada y en tama&ntilde;o reducido de ambas caras del t&iacute;tulo y fotocopia de ambas caras de la matr&iacute;cula.<br>
                <b>Fotos carnet:</b> 2 (dos).<br>

                <hr>
                <div class="col-md-4 downloadPdf txC"><a href="../../../skin/files/carreras/carrera-farmacia-programa.pdf" target="_blank"><img src="../../../skin/images/body/icons/pdficon.png" alt="" /><br><span>Descargar Programa</span></a></div>
                <!--<div class="col-md-4 downloadPdf txC"><a href="../../../skin/files/carreras/carrera-farmacia-calendario.docx" target="_blank"><img src="../../../skin/images/body/icons/pdficon.png" alt="" /><br><span>Descargar Calendario</span></a></div>-->
                <div class="col-md-4 margTop20">
                  <a href="formulario_preinscripcion.php#top" target="_blank"><button type="button" class="btn mainBtn">Inscribirse</button></a>
                </div>
              </p>
            </div><!-- row -->
          </div><!-- container -->
          <!-- /Content inside this div -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script type="text/javascript">
    // $('#myModal').on('shown.bs.modal', function () {
    //   $('#myInput').focus()
    // })
    </script>
  </body>
</html>
