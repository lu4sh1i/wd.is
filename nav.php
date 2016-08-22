<header id="header" class="transparent-header <?= isset($DARK) ? $DARK : ""?>">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="<?= isset ($HOME) ? $HOME : "/"?>" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Where Design logo"></a>
                <a href="<?= isset ($HOME) ? $HOME : "/"?>" class="retina-logo" data-dark-logo="images/logo@2x.png"><img src="images/logo@2x.png" alt="Where Design logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="<?= isset ($HOME) ? $HOME : "/"?>"><div>Studio</div></a>
                       <!--  <ul>
                            <li><a href="your-brand.php"><div>Your Brand</div></a></li>
                            <li><a href="your-website.php"><div>Your Website</div></a></li>
                        </ul> -->
                    </li>
                    <li><a href="works"><div>Works</div></a>   </li>
                    <li><a href="services"><div>Services</div></a> </li>
                    <li><a href="contact"><div>Contact</div></a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
