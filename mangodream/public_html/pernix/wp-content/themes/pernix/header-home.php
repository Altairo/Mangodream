<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->

<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width" />

	<title><?php bloginfo('name'); ?></title>

  <meta name="keywords" content="отдых, Ладога, Ладожское, озеро, коттедж, рыбалка, катер, яхта, Ленинградская область" />
  <meta name="description" content="База отдыха «Берег Ладоги» находится во Всеволожском районе Ленинградской области, в посёлке им. Морозова, который находится в 45 километрах от Санкт-Петербурга по Мурманскому шоссе." />



  <link rel="stylesheet" href="css/ie8-grid-foundation-4.css" />


<?php wp_head(); ?>

</head>

<body>

<!-- Шапка -->
<!-- begin telline -->
<div class="telline">
<div class="container">
  <div class="row">
    <div class="col-md-6 tel">
      <!-- <i class="fa fa-phone visible-desktop"></i>&nbsp;  -->
      <span class="glyphicon glyphicon-earphone"></span>
      <b>8 800 200-59-60</b>   &nbsp;Звонок по России бесплатный
    </div>

    <div class="col-md-6 tel">

  </div>
 </div>
</div>
</div>
  <!-- end -->


<!-- begin Header -->

	<nav id="nav" class="navbar navbar-default" role="navigation">
		<div class="container resp">
			<div class="row">
			<div class="logobox col-md-4">
	      <a href="/"><img src="<?php bloginfo('template_url'); ?>/image/pernixdata.jpg" alt="PernixData"></a>
	    </div>
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header visible-xs">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>

	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse  col-md-8 menu">
	    <?php wp_nav_menu(array(
	      'container_class' => 'menu-header',
	      'theme_location' => 'main_menu',
	      'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
	      'walker' => new Bootstrap_Walker_Nav_Menu,
	    )); ?>
	  </div><!-- /.navbar-collapse -->
	</div>
	</div>
	</nav>
  <!-- end Header -->

<!-- /// Шапка -->
