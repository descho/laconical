<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<article class="entry">
    		<header class="page-header">
    			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    			<p class="entry-date">Posted on <time><?php the_time( 'd.m.Y' ); ?></time></p>
    		</header>
    		<section class="entry-content"><?php the_content(); ?></section>
    	</article>
    <?php endwhile; ?>
    <?php get_footer(); ?>