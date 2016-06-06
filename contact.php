<?php include "header.php" ?>

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
        }
    });

    $('#google-map').gMap('centerAt', { latitude: -2.82, longitude: -80.272, zoom: 17 });

</script>
</body>
</html>