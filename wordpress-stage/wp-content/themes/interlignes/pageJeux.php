<?php /* 
Template Name: Jeux Educatifs
*/
?>
<?php
get_header();
?>
<?php
$args = array(
    'post_type' => 'post', // De type article
    'orderby' => 'date', // Par date 
    'order'   => 'DESC', // Du plus récent au plus ancien
    'category_name'     => 'jeux-educatifs' // Slug de la catégorie 
);

$query = new WP_Query($args);
?>

<section class="allListMusic">
    <?php 
   foreach ($query->posts as $post) { ?>
    <div class="blocMusic">
        <p><?= $post->post_content; ?></p>
        <?= get_the_post_thumbnail($post); ?>
        <div class="blocText">
        <p class="titleName">Titre : <?= $post->post_title; ?></p>
    <p>Editeur : <?= get_field("editorgame", $post->ID); ?></p>
    <p>Prix : <?= get_field("pricegame", $post->ID); ?>€</p>       
    <p>Catégories : <?= get_the_category($post->ID)[0]->name; ?></p>
    </div>
    </div>
<?php }
   ?>
</section>
