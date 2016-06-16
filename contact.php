<?php 
$TITLE = "Contact Where Design";
include "header.php" ?>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <?php
    $DARK = "dark";
    include "nav.php";
    ?>
    <!-- Content
    ============================================= -->
    <?php include "partial/content-contact.php" ?>

    <!-- Footer
    ============================================= -->

    <?php include "footer.php"?>

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->

<?php include "bottom-js.php";?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script type="text/javascript">

    $('#google-map').gMap({
        address: 'Tache Ionescu 3, Bucharest, Romania',
        maptype: 'ROADMAP',
        zoom: 17,
        markers: [
            {
                address: "Tache Ionescu 3, Bucharest, Romania",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Where Design</span></h4><p class="nobottommargin">Hi! We\'re Where Design. Our mission is to help businesses get an <strong>online presence</strong> and a <strong>high quality brand identity</strong>. Feel free to give us a visit if you come by.</div>',
                icon: {
                    image: "images/icons/map-icon.png",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        },
        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
    });

    $('#google-map').gMap('centerAt', { latitude: -2.82, longitude: -80.272, zoom: 17 });

</script>
</body>
</html>