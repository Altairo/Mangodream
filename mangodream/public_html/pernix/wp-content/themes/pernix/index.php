<?php
if ( is_home() ) :
  get_header('home');
// elseif ( is_404() ) :
//  get_header('404');
else :
  get_header();
endif;


?>


<!-- begin -->
https://gist.github.com/29a29d6d6ce0d688945e

<!-- begin slider -->
<div class="slider">
  <div class="container">
  <div class="row">
    <div class="large-12 columns">
          <!-- <img src="<?php bloginfo('template_url'); ?>/image/slider.jpg" alt=""> -->
           <?php  putRevSlider("tm") ?>
            <?php // putRevSlider("Slider") ?>
    </div>
  </div>
  </div>
</div>
<!-- end slider -->


<!-- begin Products -->
<div class="container products">
  <div class="row">
<?php

$args = array(
   'order' => 'ASC'
  ,'sort_column' => 'post_title'
  ,'posts_per_page' => ''
  ,'hierarchical' => 1
  ,'exclude' => ''
  ,'include' => ''
  ,'authors' => ''
  ,'child_of' => 0
  ,'parent' => -1
  ,'exclude_tree' => ''
  ,'number' => ''
  ,'offset' => 0
  ,'post_type' => 'post'
);

 $query = new WP_Query($args);
?>


  <?php  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="col-md-4">
     <h2><?php  the_title(); ?></h2>
     <p><?php the_content(); ?></p>
     </div>

<?php  endwhile; ?>
<?php  wp_reset_postdata(); ?>
<?php  endif; ?>


</div>
</div>
  <!-- end Products -->




<!-- begin Products -->
<div class="container pictures">
  <div class="row">
    <div class="col-md-4">
      <div class="pics"><h2><a href="<?php bloginfo('template_url'); ?>/solutions/virtualize/">Быстрые запросы к базе данных</a></h2><img src="<?php bloginfo('template_url'); ?>/image/pic1.jpg" alt=""></div>

    </div>
    <div class="col-md-4">
      <div class="pics"><h2><a href="<?php bloginfo('template_url'); ?>/solutions/vdi/">Уменьшение задержки VDI</a></h2><img src="<?php bloginfo('template_url'); ?>/image/pic2.jpg" alt=""></div>

    </div>
    <div class="col-md-4">
    <div class="pics"><h2><a href="<?php bloginfo('template_url'); ?>/solutions/accelerate/">Ускорение любых приложений</a></h2><img src="<?php bloginfo('template_url'); ?>/image/pic3.jpg" alt=""></div>
    </div>
  </div>
</div>
  <!-- end Products -->



<!-- begin Products -->
<!-- <div class="container products">
  <div class="row">
    <div class="col-md-6">
     <h2>RE-THINK STORAGE</h2>
     <p>PernixData FVP™ software puts storage intelligence into high-speed server media.
Fast VMs. Scale-out growth. Low storage costs.
    </p>
    <img src="/image/fvp.jpg" alt="">
    </div>
    <div class="col-md-6">
     <h2>УСКОРЕНИЕ БАЗ ДАННЫХ</h2>
     <p>PernixData предлагает 100% программное решение, ускоряющее чтение и запись to primary storage by clustering server-side resources like flash and RAM to solve database performance problems easily and cost effectively.
    </p>
    </div>
  </div>
</div> -->
  <!-- end Products -->

<!--
    <div class=" separator">
          <div>Награды</div>
    </div>
-->


<!-- begin separator-->
<div class="container">
  <div class="row">
    <div class="col-md-12 separator">
          <div>Награды</div>
    </div>

  </div>
</div>
  <!-- end separator -->

<!-- begin Awards -->
<div class="awards">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php echo do_shortcode('[owl-carousel category="demo" items="5" autoPlay="true" itemsDesktop="1000,2"]'); ?>
    </div>
  </div>
</div>
</div>
  <!-- end Awards -->

<!-- begin separator-->
<div class="container">
  <div class="row">
    <div class="col-md-12 separator">
          <div>Истории успеха</div>
    </div>

  </div>
</div>
  <!-- end separator -->

  <!-- begin Studies -->
<div class="container studies">
  <div class="row">
    <div class="col-md-8">
    <?php echo do_shortcode('[logooos columns="4" itemsheightpercentage="0.80" backgroundcolor="transparent" layout="grid" category="4" orderby="date" order="DESC" marginbetweenitems="25px" tooltip="enabled" responsive="enabled" grayscale="disabled" border="enabled" bordercolor="#DCDCDC" borderradius="logooos_no_radius" onclickaction="openLink" hovereffect="effect1" hovereffectcolor="#DCDCDC" ]'); ?>
    </div>
    <div class="col-md-4">
      <h2>FVP ускоряет приложения в любой отрасли</h2>
      <!--<p>Виртуализированные приложения  </p>-->
      <p>FVP предоставляет дата-центрам возможность интеллектуального хранения данных, для ускорения работы любых приложений.</p>
    </div>
  </div>
</div>
  <!-- end Studies -->



<?php // get_sidebar(); ?>



<?php get_footer(); ?>
