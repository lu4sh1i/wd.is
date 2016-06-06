<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Where Design" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Playfair+Display:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= isset($STYLECSS) ? $STYLECSS : 'style.css' ?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($SWIPER) ? $SWIPER : 'css/swiper.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($DARK) ? $DARK :'css/dark.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($FONTICONS) ? $FONTICONS :'css/font-icons.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($ANIMATE) ? $ANIMATE :'css/animate.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($MAGNIFIC) ? $MAGNIFIC :'css/magnific-popup.css'?>" type="text/css" />

    <link rel="stylesheet" href="<?= isset($RESPONSIVE) ? $RESPONSIVE : 'css/responsive.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($COLORS) ? $COLORS : 'css/colors.css'?>" type="text/css" />
    <link rel="stylesheet" href="<?= isset($CUSTOM) ? $CUSTOM : 'css/custom.css'?>" type="text/css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title><?= isset($TITTLE) ? $TITTLE : "Where Design is "?></title>

    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>

</head>

<body class="stretched">