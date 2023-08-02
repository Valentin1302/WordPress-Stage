<?php 
/*
Template Name: Livres
*/
?>
<?php
get_header();
?>
<h1>Nos Livres</h1>
<?php
$args = array(
    'post_type' => 'post', // De type article
    'orderby' => 'date', // Par date 
    'order'   => 'DESC', // Du plus récent au plus ancien
    'category_name'     => 'nos-livres' // Slug de la catégorie 
);

$query = new WP_Query($args);
?>

    <?php 
   foreach ($query->posts as $post) { ?>
        <p><?= $post->post_content; ?></p>
        <?= get_the_post_thumbnail($post); ?>
        <p>Titre : <?= $post->post_title; ?></p>
    <p>Editeur : <?= get_field("editionbook", $post->ID); ?></p>      
    <p>Catégories : <?= get_the_category($post->ID)[0]->name; ?></p>
<?php }
?>
</section>