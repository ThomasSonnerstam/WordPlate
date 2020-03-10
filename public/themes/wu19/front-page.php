<?php get_header(); ?>

<div class="row">
    <div class="col">


        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>

        <?php foreach (get_posts(["numberposts" => 2, "order" => "desc"]) as $post) : setup_postdata($post); ?>

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail("medium"); ?>

            <?php endif; ?>

        <?php endforeach; ?>

        <h1><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">More posts</a></h1>

    </div>
</div>

<?php get_footer(); ?>