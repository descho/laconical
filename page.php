<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<article class="entry">
	    	<header class="page-header">
	    		<h2 class="entry-title"><?php the_title(); ?></h2>
    		</header>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
    		<div class="entry-content">
    			<?php the_content(); ?>
    		</div>
    	</article>
    <?php endwhile; ?>
    <?php get_footer(); ?>