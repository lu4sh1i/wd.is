<header id="header" class="transparent-header <?= isset($DARK) ? $DARK : ""?>">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="<?= isset ($HOME) ? $HOME : "index.php"?>" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                <a href="<?= isset ($HOME) ? $HOME : "index.php"?>" class="retina-logo" data-dark-logo="images/logo@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="<?= isset ($HOME) ? $HOME : "index.php"?>"><div>Studio</div></a>
                       <!--  <ul>
                            <li><a href="your-brand.php"><div>Your Brand</div></a></li>
                            <li><a href="your-website.php"><div>Your Website</div></a></li>
                        </ul> -->
                    </li>
                    <li><a href="works.php"><div>Works</div></a>   </li>
                    <li><a href="services.php"><div>Services</div></a> </li>
                    <li><a href="contact.php"><div>Contact</div></a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>