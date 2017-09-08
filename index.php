	<?php get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/index.css">
	<?php include('nav.php'); ?>	
	<div class="banner">
		<div class="person_info">
		</div>
		<div class="banner_img">
		</div>
		<div class="skill skill1"></div>
		<div class="skill skill2"></div>
		<div class="skill skill3"></div>
		<div class="skill skill4"></div>
		<div class="skill skill5"></div>
	</div>
	<div class="content ">
		<?php /*<div class="article clear-top">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="the_title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
				<div class="author date">
					<a href="<?php the_author_posts(); ?>"><?php the_author(); ?></a>
					
					<span class="time"><?php the_time(' / Y-m-d'); ?></span>
				</div>
				<div class="excerpt"><?php the_excerpt() ?></div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<p><?php posts_nav_link();?></p>
		</div> */?>
	
		<div class="posts posts_image">
			<h2>图像</h2>
			<?php query_posts(array('category' => 'image' , 'posts_per_page' => 2)); ?>
			<?php while(have_posts()) : the_post(); ?>	
			<div class="post post_<?php the_ID(); ?>">
				
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<?php $contentimg = get_content_first_image(get_the_content());echo;?>
				<img src="<?php $contentimg ?>" alt="">
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile;else: ?>
			<h3>Not Post</h3>
			<?php wp_reset_query();?>
		</div>

		<div class="posts posts_text">
			<h2>文本</h2>
			<?php query_posts(array('category' => 'text' , 'posts_per_page' => 2));?>
			<?php while(have_posts()) : the_post(); ?>	
			<div class="post post_<?php the_ID(); ?>">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query();?>
		</div>
		<div class="posts posts_music">
			<h2>音乐</h2>
			<?php query_posts(array('category' => 'music' , 'posts_per_page' => 2)); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post post_<?php the_ID();?>">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query();?>
		</div>
			<div class="post post4">
				<div class="title"></div>
				<div class="meta"></div>
				<div class="excerpt"></div>
			</div>
		</div>
		<div class="content-img"></div>

	<?php get_footer(); ?>