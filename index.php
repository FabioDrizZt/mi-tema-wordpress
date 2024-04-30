<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
    <div id="content">
        <h1>Mi primer pagina en wordpress</h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>
    <div id="content">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <?php endif; ?>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php esc_html_e( 'No se encontraron publicaciones.', 'my_theme' ); ?></p>
        <?php endif; ?>
    </div>

    <?php get_footer(); ?>
</body>

</html>