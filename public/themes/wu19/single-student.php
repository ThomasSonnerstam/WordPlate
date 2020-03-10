<?php get_header(); ?>

<div class="row">
    <div class="col">


        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <p><?php the_field("Github"); ?></p>

                <a href="<?php the_field("Email"); ?>">Student's email</a>



                <?php the_content(); ?>

                <small><?php the_date(); ?></small>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>