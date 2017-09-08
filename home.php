<?php get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/home.css">
	<?php include('nav.php'); ?>
    <div class="posts posts_image">
			<h2>图像</h2>
			<?php query_posts(array('category_name' => 'image' , 'posts_per_page' => 2)); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
			<div class="post post_<?php the_ID(); ?>">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				<?php get_content_first_image(get_the_content()) ;?>
				<img src="<?php echo get_content_first_image(get_the_content());?>" alt="">
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile;else: ?>
			<h3>Not Post</h3>
            <?php endif;wp_reset_query();?>
		</div>

		<div class="posts posts_text">
			<h2>文本</h2>
			<?php query_posts(array('category_name' => 'text' , 'posts_per_page' => 2));if(have_posts()):while(have_posts()):the_post();?>	
			<div class="post post_<?php the_ID(); ?>">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile;else: ?>
            <?php endif;wp_reset_query();?>
		</div>
		<div class="posts posts_music">
			<h2>音乐</h2>
			<?php if(have_posts()) : query_posts(array('category_name' => 'music' , 'posts_per_page' => 2)); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post post_<?php the_ID();?>">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile;else: ?>
            <?php endif;wp_reset_query();?>
		</div>
			<div class="post post4">
				<div class="title"></div>
				<div class="meta"></div>
				<div class="excerpt"></div>
			</div>
		</div>
        <div class="content-img"></div>
<?php get_footer(); ?>