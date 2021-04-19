<?php get_header(); ?>

<!-- keep until release -->
<div id="em-construcao" style="
background-color: white;
justify-content: center;
align-items: center;
text-align: center;
display: flex;
flex-flow: column;
position: absolute;
top: 0; left: 0;
width: 100vw;
height: 100vh;
z-index: 10;">
<div><h1>PORTFÓLIO DO FOTÓGRAFO ANDERSON MARQUES</h1></br><h2>EM BREVE</h2></div>
</div>

<!-- main post board -->
<div class="scrollspacer">
  <div id="index-main" class="wrapper horizontal">
    <div class="index grid">
<?php
while (have_posts()) {
        the_post();
?>
      <div class="index item container">
        <a class="index permalink" href="<?php the_permalink(); ?>">
          <img class="index thumb"
            src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
          />
        </a>
      </div>
<?php
}
?>
    </div>
  </div>
</div>
<?php
get_footer();
