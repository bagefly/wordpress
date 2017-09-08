<?php get_header(); ?>
</head>
<body>
    <div class="nav">
        <a href="http://localhost"><div class="logo"></div></a>
        <div class="nav_menu clear-float">
            <div class="box box1 select"></div>
            <div class="box box2"></div>
            <div class="box box3"></div>
            <div class="box box4"></div>
            <div class="box box5"></div>
            <div class="box box6"></div>
        </div>
        <div class="sign_menu">
            <a href="" class="search_div">
                <div class="search_input">
                    <div class="search_arrow"></div>
                    <form action="">
                        <input type="text" class="search_text" placeholder="马化腾演讲" name="keyword">
                        <input type="submit" value="搜索">
                    </form>
                </div>
            </a>
            <a href="" class="search_qq" >
                <img src="<?php bloginfo('template_url'); ?>/images/qq.png" alt="">
                <div class="img_login">
                    <span>登录</span>
                </div>
            </a>
        </div>
    </div>
    <div class="banner">
        <div class="dot dot1">
            <div class="circle circle1">
                <div class="spot"></div>
            </div>
        </div>
        <div class="pic box1"></div>
        
        <div class="dot dot2">
            <div class="circle circle2">
                <div class="spot"></div>
            </div>
        </div>
        <div class="pic box2"></div>
        
        <div class="dot dot3">
            <div class="circle circle3">
                <div class="spot"></div>
            </div>
        </div>
        <div class="pic box3"></div>
        
        <div class="dot dot4">
            <div class="circle circle4">
                <div class="spot"></div>
            </div>
        </div>
        <div class="pic box4"></div>
    </div>
    <div class="live">
        <form action="">
        <input type="checkbox" name="live1" id="live_open">
        <label for="live_open"></label>
        <div class="container_live">
            <p class="live_notice">
                <img src="<?php bloginfo('template_url'); ?>/images/icon-speaker.png" alt="">
                直播信息已隐藏，展开后可以继续浏览。
            </p>
            <div class="posts post_livenotice">
                <h2 class="livenotice">直播预告</h2>
                <?php query_posts(array('category_name' => 'livenotice' , 'posts_per_page' => 1)); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
                <div class="post post_<?php the_ID(); ?>">
                    <?php get_content_first_image(get_the_content()) ;?>
                    <img src="<?php echo get_content_first_image(get_the_content());?>" alt="">
                    <div class="live_article">
                        <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <p class="live_time"><?php the_time('Y年m月d日'); ?></p>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </div>
                <?php endwhile;else: ?>
                <h3>Not Post</h3>
                <?php endif;wp_reset_query();?>
            </div>
        </div>
        <input type="checkbox" name="live2" id="slider_close">
        <label for="slider_close"></label>
        
        </form>
    </div>
    <div class="content">
        <div class="posts post_hotlesson clear-float">
            <h2 class="lessons">热门课程</h2>
            <?php query_posts(array('category_name' => 'hotlesson' , 'posts_per_page' => 3)); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
            <div class="post post_<?php the_ID(); ?>">
                
                <?php /*<div class="meta"><?php the_time('Y-m-d /'); ?><?php the_author(); ?></div> */?>
                <?php get_content_first_image(get_the_content()) ;?>
                <img src="<?php echo get_content_first_image(get_the_content());?>" alt="">
                <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="excerpt"><?php the_excerpt(); ?></div>
            </div>
            <?php endwhile;else: ?>
            <h3>Not Post</h3>
            <?php endif;wp_reset_query();?>
        </div>
        <div class="posts post_share">
            <h2 class="share">干货分享</h2>
            <?php query_posts(array('category_name' => 'share' , 'posts_per_page' => 3)); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post post_<?php the_ID(); ?> clear-float">
                <?php get_content_first_image(get_the_content()) ;?>
                <img class="share_img" src="<?php echo get_content_first_image(get_the_content());?>" alt="">
                <div class="share_article">
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <p class="share_time"><?php the_time('Y-m-d h:m:s'); ?></p>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </div>
            </div>
            <?php endwhile;else: ?>
            <h3>Not Post</h3>
            <?php endif;wp_reset_query();?>    
        </div>
        <div class="posts post_activity">
            <h2 class="activity">精品活动</h2>
            <?php query_posts(array('category_name' => 'activity' , 'posts_per_page' => 3)); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post post_<?php the_ID(); ?> clear-float">
                <?php get_content_first_image(get_the_content()) ;?>
                <img class="activity_img" src="<?php echo get_content_first_image(get_the_content());?>" alt="">
                <div class="activity_article">
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <p class="activity_time"><?php the_time('Y年m月d日'); ?></p>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </div>
            </div>
            <hr>
            <?php endwhile;else: ?>
            <h3>Not Post</h3>
            <?php endif;wp_reset_query();?>    
        </div>
        <div class="posts post_rank">
            <h2 class="rank">排行榜</h2>
            <p class="rank_kind">
                <span class="rank_order">最热排行</span>
                <span class="newlesson">新课上线</span>
            </p>
            <?php query_posts(array('category_name' => 'hotrank' , 'posts_per_page' => 10)); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post post_<?php the_ID(); ?>">
                <?php get_content_first_image(get_the_content()) ;?>
                <img class="rank_img" src="<?php echo get_content_first_image(get_the_content());?>" alt="">
                <div class="title"><a href="<?php the_permalink(); ?>"><em>1</em><?php the_title(); ?></a></div>
            </div>
            <?php endwhile;else: ?>
            <h3>Not Post</h3>
            <?php endif;wp_reset_query();?> 
            <hr>
            <div class="tschool">
                <div class="about_tsc">
                    <i class="mark"></i>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/tencentschool.png" alt=""></a>
                </div>
                <div class="about_info">
                    <p class="title">腾讯大学</p>
                    <p>腾讯大学作为腾讯特色的学习交流平台，服务于腾讯合作伙伴及用户，面向互联网产业链，传播腾讯经验，分享
                    行业知识及优秀实践，助力合作伙伴成长，推动开放共赢的互联网生态圈的建立。
                    </p>
                </div>
                <hr>
                <div class="contact_us">
                    <h2 class="title_concat">联系我们</h2>
                    <p>合作：<a href="mailto:university@tencent.com" style="color:#000;">university@tencent.com</a></p>
                    <p>QQ：2813343187</p>
                </div>
            </div>
        </div>
        <div class="qr">
            <p>更多腾讯活动资讯</p>
            <img src="<?php bloginfo('template_url'); ?>/images/qr.jpg" alt="">
            <p>关注腾讯大学公号</p>
        </div>
    </div>
    <div class="ending">
        <div class="line">
            <i class="blue"></i>
            <i class="yellow"></i>
            <i class="green"></i>
            <i class="orange"></i>
        </div>
        <div class="container_link clear-float">
            <div class="link">
                <h3>开放平台</h3>
                <div class="open_platform clear-float">
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem3.jpg" title="腾讯互联开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem2.png" title="朋友网" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem4.png" title="腾讯微博开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem6.jpg" title="QQ游戏开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem1.jpg" title="财付通开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem8.jpg" title="订阅开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem9.jpg" title="Discuz!云平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo_bigdata.png" title="大数据" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/link_open.png" title="开放平台" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/hitem5.png" title="腾讯广告" alt=""></a>
                    <a href="">更多</a>
                </div>
                <h3>合作伙伴</h3>
                <div class="partner clear-float">
                    <a href="">TechWeb</a>
                    <a href="">CSDN</a>
                    <a href="">36Kr</a>
                    <a href="">DoNews</a>
                    <a href="">APP游戏部落</a>
                    <a href="">天极网</a>
                    <a href="">凤凰网科技频道</a>
                    <a href="">易观网</a>
                    <a href="">优亿开发</a>
                    <a href="">雷锋网</a>
                    <a href="">飞象网</a>
                    <a href="">数码港</a>
                    <a href="">艾瑞网</a>
                    <a href="">落伍者</a>
                    <a href="">LAMP人</a>
                    <a href="">QQ浏览器</a>
                    <a href="">腾讯科技</a>
                </div>
            </div>
            <div class="fllow">
                <h3>收听微博</h3>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/opentweibo.png" alt=""></a>
                <h3>关注空间</h3>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/openzone.png" alt=""></a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 1998 - 2004 Tencent.All Rights Reserved.</p>
            <p>腾讯公司 版权所有</p>
        </div>
    </div>
<?php get_footer(); ?>