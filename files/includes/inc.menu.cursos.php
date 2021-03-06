<!-- Large and Medium Screens -->
<div class="col-lg-2 col-md-3 col-xs-12 floatMenu1 minWidthFloatMenu">
  <div class="leftFloatMenu">
    <ul>
      <!-- <li class="
      <?php
        // switch ($currentPage) {
        //   case 'curso_diagnostico.php':
        //     echo 'active';
        //   break;
          // } ?>
          "><a href="cursos2019.php">Cursos 2019</a>
        <span id="openDDcursos2018" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li> -->
        <!-- <ul class="leftDDcursos2018 animated fadeIn Hidden">
          <a href="curso_diagnostico.php"><li class="floatDD <?php echo $currentPage == 'curso_diagnostico.php' ? 'active' : ''; ?>">Diagnóstico del medicamento por la biotipología</li></a>
        </ul> -->

      <a href="cursos2019.php"><li class="<?php echo $currentPage == 'cursos2019.php' ? 'active' : ''; ?>">Cursos 2019</li></a>
      <a href="nuevas_carreras.php"><li class="<?php echo $currentPage == 'nuevas_carreras.php' ? 'active' : ''; ?>">Nuevas Carreras</li></a>
      <li class="
      <?php
        switch ($currentPage) {
          case 'carreras.php':
          case 'carrera_de_medicina_homeopatica.php':
          case 'carrera_de_odontoestomatologia_homeopatica.php';
          case 'carrera_de_veterinaria_homeopatica.php';
          case 'carrera_de_farmacia_homeopatica.php';
          case 'carrera_agrohomeopatia.php';
          case 'carrera_odontologia_intensiva.php';
            echo 'active';
          break;

          } ?>
          "><a href="carreras.php">Carreras</a>
        <span id="openDDcarreras" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcarreras animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica</li></a>
          <a href="carrera_de_odontoestomatologia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_odontoestomatologia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas</li></a>
          <a href="carrera_de_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Carrera de Veterinaria Homeop&aacute;tica</li></a>
          <a href="carrera_de_farmacia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_farmacia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Farmacia Homeop&aacute;tica</li></a>
          <a href="carrera_agrohomeopatia.php"><li class="floatDD <?php echo $currentPage == 'carrera_agrohomeopatia.php' ? 'active' : ''; ?>">Carrera de Agrohomeopatía</li></a>
          <a href="carrera_odontologia_intensiva.php"><li class="floatDD <?php echo $currentPage == 'carrera_odontologia_intensiva.php' ? 'active' : ''; ?>">Curso Intensivo de Odontología y Estomatología Homeopática</li></a>
        </ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'cursos.php':
          case 'carrera_de_medicina_homeopatica_3_en_1.php':
          case 'practica_homeopatica_para_alumnos_libres.php':
          case 'cursos_deteoriapractica.php':
          case 'odontoestomatologia_veterinaria_homeopatica.php':
          case 'cursos_libres_para_alumnos_y_socios.php':
          case 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php':
            echo 'active';
          break;
          } ?>
      "><a href="cursos.php">Cursos de Posgrado</a>
        <span id="openDDcursos" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcursos animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica_3_en_1.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica_3_en_1.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica 3 en 1</li></a>
          <a href="practica_homeopatica_para_alumnos_libres.php"><li class="floatDD <?php echo $currentPage == 'practica_homeopatica_para_alumnos_libres.php' ? 'active' : ''; ?>">Curso de pr&aacute;ctica Homeop&aacute;tica para alumnos libres</li></a>
          <!--<a href="cursos_deteoriapractica.php"><li class="floatDD <?php echo $currentPage == 'cursos_deteoriapractica.php' ? 'active' : ''; ?>">"De La Teor&iacute;a A La Pr&aacute;ctica" Curso Superior 2017</li></a>-->
          <a href="odontoestomatologia_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Curso Superior de Perfeccionamiento en Medicina, Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas y Veterinaria Homeop&aacute;tica</li></a>
          <a href="cursos_libres_para_alumnos_y_socios.php"><li class="floatDD <?php echo $currentPage == 'cursos_libres_para_alumnos_y_socios.php' ? 'active' : ''; ?>">Cursos libres para alumnos y socios</li></a>
          <a href="odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php' ? 'active' : ''; ?>">Carreras de Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas y Veterinaria Homeop&aacute;tica 2 en 1</li></a>
        </ul>
      <a href="formulario_preinscripcion.php"><li class="<?php echo $currentPage == 'formulario_preinscripcion.php' ? 'active' : ''; ?>">Formulario de Pre-inscripci&oacute;n</li></a>
      <a href="cursos_ateneos.php"><li class="<?php echo $currentPage == 'cursos_ateneos.php' ? 'active' : ''; ?>">Ateneos</li></a>
      <a href="cursos_grupos_de_estudio.php"><li class="<?php echo $currentPage == 'cursos_grupos_de_estudio.php' ? 'active' : ''; ?>">Grupos de Estudio</li></a>
      <a href="cursos_beneficios.php"><li class="<?php echo $currentPage == 'cursos_beneficios.php' ? 'active' : ''; ?>">Beneficios para el aprendizaje</li></a>
      <a href="cursos_informacion.php"><li class="<?php echo $currentPage == 'cursos_informacion.php' ? 'active' : ''; ?>">Informaci&oacute;n para el Graduado</li></a>
    </ul>
  </div>
</div>
<!-- / Large and Medium Screens -->
<!-- Mobile -->
<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 floatMenu2">
  <div class=" leftFloatMenu leftMenuInLine">
    <ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'curso_diagnostico.php':
            echo 'active';
            break;
          } ?>
          "><a href="cursos2018.php">Cursos 2018</a>
        <span id="openDDcursos20182" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
      <ul class="leftDDcursos2018 animated fadeIn Hidden">
        <a href="curso_diagnostico.php"><li class="floatDD <?php echo $currentPage == 'curso_diagnostico.php' ? 'active' : ''; ?>">Diagnóstico del medicamento por la biotipología</li></a>
      </ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'carreras.php':
          case 'carrera_de_medicina_homeopatica.php':
          case 'carrera_de_odontoestomatologia_homeopatica.php':
          case 'carrera_de_veterinaria_homeopatica.php':
          case 'carrera_de_farmacia_homeopatica.php':
          case 'carrera_agrohomeopatia.php';
          case 'carrera_odontologia_intensiva.php';
            echo 'active';
          break;
          } ?>
          "><a href="carreras.php">Carreras</a>
        <span id="openDDcarreras2" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcarreras animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica</li></a>
          <a href="carrera_de_odontoestomatologia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_odontoestomatologia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas</li></a>
          <a href="carrera_de_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Carrera de Veterinaria Homeop&aacute;tica</li></a>
          <a href="carrera_de_farmacia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_farmacia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Farmacia Homeop&aacute;tica</li></a>
          <a href="carrera_agrohomeopatia.php"><li class="floatDD <?php echo $currentPage == 'carrera_agrohomeopatia.php' ? 'active' : ''; ?>">Carrera de Agrohomeopatía</li></a>
          <a href="carrera_odontologia_intensiva.php"><li class="floatDD <?php echo $currentPage == 'carrera_odontologia_intensiva.php' ? 'active' : ''; ?>">Curso Intensivo de Odontología y Estomatología Homeopática</li></a>
        </ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'cursos.php';
            echo 'active';
            break;
          case 'carrera_de_medicina_homeopatica_3_en_1.php';
            echo 'active';
            break;
          case 'practica_homeopatica_para_alumnos_libres.php';
            echo 'active';
            break;
          case 'odontoestomatologia_veterinaria_homeopatica.php';
            echo 'active';
            break;
          case 'cursos_libres_para_alumnos_y_socios.php';
            echo 'active';
            break;
          case 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php';
            echo 'active';
            break;
          } ?>
      "><a href="cursos.php">Cursos de Posgrado</a>
        <span id="openDDcursos2" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcursos animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica_3_en_1.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica_3_en_1.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica 3 en 1</li></a>
          <a href="practica_homeopatica_para_alumnos_libres.php"><li class="floatDD <?php echo $currentPage == 'practica_homeopatica_para_alumnos_libres.php' ? 'active' : ''; ?>">Curso de pr&aacute;ctica Homeop&aacute;tica para alumnos libres</li></a>
          <a href="odontoestomatologia_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Curso Superior de Perfeccionamiento en Medicina, Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas y Veterinaria Homeop&aacute;tica</li></a>
          <a href="cursos_libres_para_alumnos_y_socios.php"><li class="floatDD <?php echo $currentPage == 'cursos_libres_para_alumnos_y_socios.php' ? 'active' : ''; ?>">Cursos libres para alumnos y socios</li></a>
          <a href="odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php' ? 'active' : ''; ?>">Carreras de Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas y Veterinaria Homeop&aacute;tica 2 en 1</li></a>
        </ul>
      <a href="formulario_preinscripcion.php"><li class="<?php echo $currentPage == 'formulario_preinscripcion.php' ? 'active' : ''; ?>">Formulario de Pre-inscripci&oacute;n</li></a>
      <a href="cursos_ateneos.php"><li class="<?php echo $currentPage == 'cursos_ateneos.php' ? 'active' : ''; ?>">Ateneos</li></a>
      <a href="cursos_grupos_de_estudio.php"><li class="<?php echo $currentPage == 'cursos_grupos_de_estudio.php' ? 'active' : ''; ?>">Grupos de Estudio</li></a>
      <a href="cursos_beneficios.php"><li class="<?php echo $currentPage == 'cursos_beneficios.php' ? 'active' : ''; ?>">Beneficios para el aprendizaje</li></a>
      <a href="cursos_informacion.php"><li class="<?php echo $currentPage == 'cursos_informacion.php' ? 'active' : ''; ?>">Informaci&oacute;n para el Graduado</li></a>
    </ul>
  </div>
</div>
<!-- /Mobile -->
