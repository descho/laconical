<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<article class="entry">
	    	<header class="page-header">
	    		<h2 class="entry-title"><?php the_title(); ?></h2>
	    		<p class="entry-date">Posted on <time><?php the_time( 'd.m.Y' ); ?></time></p>
    		</header>
    		<section class="entry-content"><?php the_content(); ?></section>
    	</article>
		<nav class="post-nav">
			<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> Previous post' ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', 'Next post <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></span>
		</nav>
    <?php endwhile; ?>
    <?php get_footer(); ?>