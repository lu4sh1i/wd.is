<?php 
$PHONE = "+40 773 719 332";
$EMAIL = "hello@wheredesign.is"
?>
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="container clearfix">
                <div class="row clearfix">

                    <div class="col-lg-4">
                        <div class="topmargin-sm">
                            <div class="feature-box fbox-center fbox-effect">
                                <div class="fbox-icon my-fbox">
                                    <a href="#"><i class="icon-screen i-alt home-icons"></i></a>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-lg-8">
                        <h1>WHAT WE DO</h1>
                        <p class="my-lead">
                            We provide a variety of custom services for both online and offline marketing.
                            The most common online project that our clients ask for is a custom website.
                            We provide everything you need from the domain name, to hosting, to designing and building the website itself.
                            Our offline projects are focused on graphic design and printing.
                            Most of our clients not only need a presence online, but also physical marketing material
                            such as business cards, brochures, and flyers. We not only design these pieces, but can also
                            recommend a printing service for you.
                        </p>
                        <a href="services" class="button button-3d button-large button-rounded button-red">Learn more</a>

                    </div>

                </div>
            </div>

            <div class="topmargin-sm"></div>
            <div class="container clearfix">
                <h1 class="heading-block">Our Latest works</h1>
            </div>
            <div class="clear"></div>

            <!-- Portfolio Items
            ============================================= -->
            <div id="portfolio" class="portfolio grid-container portfolio-2 clearfix">

                <article class="portfolio-item pf-media pf-icons" data-animate="fadeInLeft">
                    <div class="">
                        <a href="evydent.php">
                            <div class="atvImg" style="height:300px">
                                <img src="images/evydent/evydent.jpg">

                                <div class="atvImg-layer" data-img="images/evydent/cover-evy.png"></div>
                                <div class="atvImg-layer" data-img="images/evydent/evydent-logo.png"></div>
                                <div class="atvImg-layer" data-img="images/evydent/heart.png"></div>

                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="evydent">Clinica EvyDent</a></h3>
                        <span><a href="#">Branding</a></span>
                    </div>
                </article>
 <article class="portfolio-item pf-media pf-icons" data-animate="fadeInLeft">
 <div id="dribbble" class="widget clearfix">

                    <h4 class="highlight-me">Dribbble Shots</h4>
                    <div id="dribbble-widget" class="dribbble-shots masonry-thumbs" data-user="wheredesign" data-count="16" data-type="user"></div>

                </div>

</article>
            </div><!-- #portfolio end -->

                
        </div>
        <div class="clear"></div>

        <div class="promo parallax promo-dark promo-flat promo-full topmargin-sm nobottommargin nobottompadding" style="background-image: url('images/wheredesign-wall.jpg'); background-position: 50% 146.5px;" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <h3>Call us today at <span><a href="tel:<?= $PHONE ?>"><?= $PHONE ?></a></span> or Email us at <span><a href="mailto:<?= $EMAIL ?>"><?= $EMAIL ?></a></span></h3>

               <a href="contact" class="button button-light button-xlarge button-border button-rounde infinite " data-animate="pulse">Start Now</a>
           </div>
       </div>

   </div>

</section><!-- #content end -->
