<?php
/*
Template Name: Custom Home Template
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to Our Custom Home Page!</h1>
            <p>This is a custom home page template created for your website.</p>
        </div>
    </section>

    <section class="featured-posts">
        <div class="container">
            <h2>Featured Posts</h2>
            <?php
            // Example loop to display latest posts
            $args = array(
                'posts_per_page' => 3, // Adjust the number of posts as needed
            );
            $featured_posts = new WP_Query( $args );
            if ( $featured_posts->have_posts() ) :
                while ( $featured_posts->have_posts() ) :
                    $featured_posts->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); // Reset post data query
            else :
                ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
                