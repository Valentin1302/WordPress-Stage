<?php
/*
Template Name: test
*/
?>

<?php get_header(); ?>

<h1 id="titleMusicVideo">Musique et Vidéo</h1>
<?php


// C'est une variable qui sera utilisé plus tard dans le wp_query qui permet de récupérer...
$args = array(
    'post_type' => 'post', // De type article
    'orderby' => 'date', // Par date 
    'order'   => 'DESC', // Du plus récent au plus ancien
);

$query = new WP_Query($args);
?>
<div id="content">
</div>

<pre>
    <section class="allListMusic">
<?php
foreach ($query->posts as $post) { ?>
      <div class="blocMusic">
          <p><?= $post->post_content; ?></p>
          <?= get_the_post_thumbnail($post); ?>
          <div class="blocText">
          <p id="titleName">Titre : <?= $post->post_title; ?></p>
      <p>Auteur : <?= get_field("auteur", $post->ID); ?></p>
      <p>Prix : <?= get_field("price", $post->ID); ?>€</p>       
      <p>Date : <?= get_field("date", $post->ID); ?></p>
      <p><?= get_the_category($post->ID)[0]->name; ?></p>
      </div>
      </div>
  <?php }
    ?>
   </section>
   </pre>