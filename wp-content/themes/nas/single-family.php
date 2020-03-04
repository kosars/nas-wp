<?php get_header();?>
<section class="wrapper">
        <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );

                //the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
		?>
        <div class="family-block">
            <div class="block">
                <img src=<?php echo  get_the_post_thumbnail_url( get_the_ID()); ?> alt="archaeologist photo НАШ">
            </div>
            <div class="block text">
                <h2><?php the_title();?></h2>
                <h4><?php echo get_post_meta(get_the_ID(), 'family_category', true);?></h4>
                <p><?php the_content();?></p>
                <div class="family-link">
                    <a href="<?php echo get_post_type_archive_link('family'); ?>">ВЕРНУТЬСЯ К КОМАНДЕ</a>
                </div>
                
            </div>
        </div>
</section>
<?php get_footer();?>    