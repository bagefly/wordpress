	<?php get_header(); ?>
	<?php include('nav.php'); ?>	
	<div class="banner">
		
	</div>
	<div class="content">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="the_post">
			<div class="the_title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
			<div class="the_conctent"><?php the_content() ?></div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_footer(); ?>