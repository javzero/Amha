<!-- Large and Medium Screens -->
<div class="col-lg-2 col-md-3 col-xs-12 floatMenu1 minWidthFloatMenu">
  <div class="leftFloatMenu">
    <ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'socios.php';
            echo 'active';
            break;
          case 'consultoriosamha.php';
            echo 'active';
            break;
          case 'consultoriosprivados.php';
            echo 'active';
            break;
          default:
            '';
            break;
          } ?>
      "><a href="consultorios.php">Consultorios</a>
        <span id="openDDsociosBenef" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDSociosBenef Hidden animated fadeIn">
          <a href="consultoriosamha.php"><li class="floatDD <?php echo $currentPage == 'consultoriosamha.php' ? 'active' : ''; ?>">Atenci&oacute;n Pacientes A.M.H.A.</li></a>
          <a href="consultoriosprivados.php"><li class="floatDD <?php echo $currentPage == 'consultoriosprivados.php' ? 'active' : ''; ?>">Atenci&oacute;n Consultorios Privados</li></a>
        </ul>
      <li class="<?php echo $currentPage == 'farmacias.php' ? 'active' : ''; ?>"><a href='farmacias.php'>Farmacias</a></li>
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
          case 'socios.php';
            echo 'active';
            break;
          case 'consultoriosamha.php';
            echo 'active';
            break;
          case 'consultoriosprivados.php';
            echo 'active';
            break;
          default:
            '';
            break;
          } ?>
      "><a href="consultorios.php">Consultorios</a>
        <span id="openDDsociosBenef" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDSociosBenef Hidden animated fadeIn">
          <a href="consultoriosamha.php"><li class="floatDD <?php echo $currentPage == 'consultoriosamha.php' ? 'active' : ''; ?>"><div style="width:100%;">Atenci&oacute;n Pacientes Amha</div></li></a>
          <a href="consultoriosprivados.php"><li class="floatDD <?php echo $currentPage == 'consultoriosprivados.php' ? 'active' : ''; ?>"><div>Atenci&oacute;n Consultorios Privados</div></li></a>
        </ul>
      <li class="<?php echo $currentPage == 'farmacias.php' ? 'active' : ''; ?>"><a href='farmacias.php'>Farmacias</a></li>
    </ul>
  </div>
</div>
<!-- /Mobile -->
