<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
<?php
  $Pharmacies = $DB->fetchAssoc('pharmacy a LEFT JOIN geolocation_province b ON (a.province_id = b.province_id)','a.*,b.name as province',"status='A'",'a.province_id,a.name');
//var_dump($Pharmacies);die();

  $Lat = 0;
  $Lng = 0;

foreach($Pharmacies as $Pharmacy)
{
  $Lat += $Pharmacy['lat'];
  $Lng += $Pharmacy['lng']; 
  
  if($Province != $Pharmacy['province_id'])
  {
    $HTML .= '<hr class="deleteable"><div class="row section titleSeparator consultProv deleteable"><h5><b class="w">'.$Pharmacy['province'].'</b></h5></div><hr class="deleteable">';
    $Province = $Pharmacy['province_id'];
  }

  $Name     = $Pharmacy['name'];
  $Address  = '<b><i class="fa fa-map-signs"></i> </b>'.$Pharmacy['address'].'<br>';
  $Phone    = $Pharmacy['phone']?'<b><i class="fa fa-phone"></i> </b>'.$Pharmacy['phone'].'<br>':'';
  $Whatsapp = $Pharmacy['whatsapp']?'<b><i class="fa fa-whatsapp"></i> </b>'.$Pharmacy['whatsapp'].'<br>':'';
  $Website  = $Pharmacy['website']? '<b><i class="fa fa-globe"></i> </b><a href="http://'.$Pharmacy['website'].'" target="_blank">'.$Pharmacy['website'].'</a><br>':'';
  $Logo     = $Pharmacy['logo']? $Pharmacy['logo'] : '../../../skin/images/products/farmacias/pharmacygeneric.jpg';
  $Other    = '<br>'.$Pharmacy['other'];
  if($Pharmacy['facebook'])
  {
    $Fb = array_reverse(explode("/",$Pharmacy['facebook']));
    if($Fb[0])
      $Facebook = '<b><i class="fa fa-facebook"></i> </b><a href="https://www.facebook.com/'.$Fb[0].'" target="_blank">facebook.com/'.$Fb[0].'</a>';
    else
      $Fb = array();
  }else{
    unset($Facebook);
  }
  
  $Emails   = str_replace(" ","/",$Pharmacy['email']);
  $Emails   = str_replace("|","/",$Emails);
  $Emails   = str_replace("///","/",$Emails);
  $Emails   = str_replace("//","/",$Emails);
  
  $Emails   = explode("/",$Emails);
  foreach ($Emails as $Email) {
    if($Mail) $Mail .= ' | ';
    $Mail .= '<a href="https://mail.google.com/mail/?view=cm&fs=1&to='.$Email.'" target="_blank">'.strtolower($Email).'</a>';
  }
  if($Mail)
  {
    $Mail = '<b><i class="fa fa-envelope"></i> </b>'.$Mail.'<br>';
  }
  $HTML    .= '
  <div class="row item2Col">
    <div class="col-sm-12 item2ColInner">
      <div class="col-md-2 col-sm-2 col-xs-12 item2ColImg">
        <img src="'.$Logo.'" alt="" />
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12 item2ColInnerText">
        <h5>Farmacia '.$Name.'</h5>
        <p id="p'.$Pharmacy['pharmacy_id'].'">
          '.$Address.'
          '.$Phone.'
          '.$Whatsapp.'
          '.$Mail.'
          '.$Website.'
          '.$Facebook.'
          '.$Other.'
        </p><!-- Data -->
      </div>
    </div>
  </div>
  ';
  unset($Mail);
}

$Lat = $Lat/count($Pharmacies);
$Lng = $Lng/count($Pharmacies);
?>


</head>
  <body>
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer">
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.agenda.php') ?>
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-12 col-xs-12">
          <!-- Content inside this div -->
          <!-- title -->
          <div class="sectionTits"><h1 class="txC">Farmacias</h1></div>
          <hr>
          <div class="txC">
            <h4>Lista de farmacias homeop&aacute;ticas recomendadas por la A.M.H.A.</h4>
              <h5>Haga click sobre el nombre de la farmacia para visitar su sitio web.</h5><br>
          </div>
          <!-- title -->
          <!-- MAP -->
          <div class="row wow zoomIn fadeIn txC mapFarmacias">
            <!--<iframe src="https://www.google.com/maps/d/embed?mid=1J21jL3VZa3Zt4cHRg3UHAhG7oAk" width="100%" height="480"></iframe>-->
            <div id="map" style="width:100%;height:480px;"></div>
          </div>
          <!-- MAP -->
          <!-- //// items Start //// -->
          <?php echo $HTML; ?>



          <!-- / items End -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    
    
    <script>
      var map;
      function initMap(){
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          //center: new google.maps.LatLng(-34.355058,-61.940918),
          center: new google.maps.LatLng(<?php echo $Lat.','.$Lng; ?>),
          mapTypeId: 'terrain'
        });

        // Create a <script> tag and set the USGS URL as the source.
        //var script = document.createElement('script');
        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        //script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        // script.src = '../pharmacies/markers.php';
        
        // document.getElementsByTagName('head')[0].appendChild(script);
        
        <?php $I=1; foreach($Pharmacies as $Pharmacy){ ?>
          var latLng = new google.maps.LatLng(<?php echo $Pharmacy['lat'].','.$Pharmacy['lng'] ?>);
          var marker<?php echo $I ?> = new google.maps.Marker({
            position: latLng,
            map: map,
            title: '<?php echo $Pharmacy['name'] ?>',
            icon: 'http://icons.iconarchive.com/icons/icons-land/gis-gps-map/64/Pharmacy-icon.png'
          });
          var contentString<?php echo $I ?> = '<h2>&#160;Farmacia <?php echo $Pharmacy['name'] ?></h2><p>'+$('#p<?php echo $Pharmacy['pharmacy_id'] ?>').html()+'</p>';

          window<?php echo $I ?> = new google.maps.InfoWindow({
            content: contentString<?php echo $I ?>
          });

          google.maps.event.addListener(marker<?php echo $I ?>, 'click', function() {
            window<?php echo $I ?>.open(map,marker<?php echo $I ?>);
          });
          <?php ;$I++;} ?>
        
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
        
        // window.pharmcies_callback = function(results) {
        // for (var i = 0; i < results.length; i++) {
          // var lat = results[i].lat;
          // var lng = results[i].lng;
          
      //   }
      // }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0&callback=initMap"></script>
  </body>
</html>
