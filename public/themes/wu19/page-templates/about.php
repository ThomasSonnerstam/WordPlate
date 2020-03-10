<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="row">
    <div class="col">


        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>

        <?php foreach (get_posts(["post_type" => "student"]) as $student) : ?>

            <a href="<?php echo get_the_permalink($student); ?>">
                <h1><?php echo $student->post_title; ?></h1>
            </a>

            <p><?php echo $student->post_content; ?></p>

            <ul>
                <?php foreach (get_the_terms($student, "skill") as $skill) : ?>
                    <a href="<?php echo get_category_link($skill); ?>">
                        <li><?php echo $skill->name; ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>

        <?php endforeach; ?>

    </div>
</div>

<?php get_footer(); ?>
