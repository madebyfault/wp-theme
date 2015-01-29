<?php get_header(); ?>

<div id="mainContent">
    <article id="contents">
        <header>
            <h1 id="contentsTitle">Works</h1>
        </header><!-- /contentsHeader -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section>
            <h1><?php the_title(); ?></h1>
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="<?php the_title_attribute(); ?>"></a>
            <ul class="postInfo">
                <li class="postDate">Posted at <time datetime="<?php the_time( 'Y-m-d G:i' ); ?>"><?php the_time( get_option('date_format') ); ?></time></li>
                <li class="postTag"><?php the_tags('Tag : ',' , '); ?></li>
<?php if ( get_field('siteUrl') ) : ?>
                <li class="postUrl"><a href="<?php the_field("siteUrl", $post->ID); ?>"><?php the_field("siteName", $post->ID); ?><i></i></a></li>
<?php else : ?>
<?php endif; ?>
            </ul>
            <p class="Summary"><?php echo get_the_excerpt(); ?></p>
            <p class="postMore"><a href="<?php the_permalink(); ?>"><i class="icon-double-angle-right"></i> 続きを見る</a></p>
        </section><!-- /loop end -->
<?php endwhile; endif; ?>

<?php page_navi( 'items=3&first_label=First&last_label=Last&indent=1;' ); ?><!-- /pagenavi -->
    </article><!-- /contents -->
</div><!-- /mainContent -->
<?php get_footer(); ?>