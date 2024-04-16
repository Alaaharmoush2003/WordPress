
<?php
/*
Template Name: Home
*/
custom_get_header(); ?>



<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to Our Website!</h1>
            <p>This is the homepage of our WordPress site. You can customize this content as needed.</p>
        </div>
    </section>

    <section class="featured-posts">
        <div class="container">
            <h2>Featured Posts</h2>
            <?php
            // Example loop to display latest posts
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile;
            else :
                ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
