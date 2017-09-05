	<?php get_header(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/single.css">
	<?php include('nav.php'); ?>
	<?php if(have_posts()) : the_post(); ?>
	<div class="the_post">
		<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
		<div class="content"><?php the_content() ?></div>
	</div>
	
	<?php endif; ?>
	<!-- <div class="nav_menu">
		<div class="logo">
			<a href=""><span>Evans</span></a>
		</div>
		<div class="menu">
			<span>首页</span>
			<span>关于我</span>
			<span>经历</span>
			<span>荣誉</span>
			<span>联系我</span>
		</div>
	</div>	 -->
	<div class="nav clear-float" >
		<div class="nav_left">
		</div>
		<div class="nav_right">

		</div>
	</div>
	<div class="banner">
		
	</div>
	<div class="content">

	</div>
	<?php get_footer(); ?>
	