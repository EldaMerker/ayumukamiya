
<!-- header作成する -->
<?php
/*
Template Name:Portraits
*/
?>
<?php get_header("3"); ?>

  <div class="mainvidual">
      <h1 class="portfolio-title">Portraits</h1>
    <div id="wrapper">
    <ul id="container">
<!-- 投稿ページ -->
<!-- <?php
$posts = get_posts('posts_per_page=-1&category=2');
global $post;
if($posts): foreach($posts as $post): setup_postdata($post); ?>

<li><div class="item">
<a class="fancybox" data-fancybox-group="group2" href="<?php echo get_the_permalink() ?>"><?php the_post_thumbnail(array(250,250), array('class' => 'left')); ?></a>
</div>

<div class="contents_caption">
  <p><?php the_time(__('Y.m.d')) ?></p>
</div>

<div class="link_txt">
  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div>
</li>
<?php endforeach; endif; ?>
<?php wp_reset_postdata(); ?>
  </ul> -->


<div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/taka.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/taka.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/taka02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/taka02.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/taka03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/taka03.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/shin01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/shin01.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/shin02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/shin02.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/shin03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/shin03.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus01.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus02.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus03.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus04.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus04.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus05.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus05.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus06.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus06.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus07.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus07.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus08.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus08.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus09.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus09.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/lotus10.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/lotus10.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina01.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina02.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina03.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina04.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina04.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina05.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina05.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina06.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina06.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina07.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina07.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>
      <div class="item"><a class="fancybox" data-fancybox-group="group2" href="<?php bloginfo('template_url'); ?>/img/portraits/hina08.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits-icon/hina08.png" alt="上矢　歩夢 | Ayumu Kamiya - Photographer"></a></div>



         <div class="clear-fix"></div>
      </div>

      <!-- ends- 投稿ページ -->
    </div>

  </div>

  </body>
</html>