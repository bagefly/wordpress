<?php
/* 
Template Name: Archives

The template for displaying archive pages
 *
 * @link https://8god.me
 *
 * @package Evans
 * @subpackage SkyWide
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="content">
	<?php the_post(); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	
	<?php get_search_form(); ?>
	
	<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	
	<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>