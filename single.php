<?php get_header(); ?>

<div id="mainContent">
    <article id="contents">
        <header>
            <h1 id="contentsTitle">Works</h1>
        </header><!-- /contentsHeader -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section id="entries">
            <h1><?php the_title(); ?></h1>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="<?php the_title_attribute(); ?>">
            <p class="Summary"><?php $content = get_the_content(); $content = preg_replace("/\n/","<br />",$content); echo $content; ?></p>

<?php if ( get_field('custumPhoto01') ) : ?>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php the_field("custumPhoto01", $post->ID); ?>" alt="<?php the_title_attribute(); ?>">
<?php else : ?>
<?php endif; ?>

<?php if ( get_field('custumPhoto02') ) : ?>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php the_field("custumPhoto02", $post->ID); ?>" alt="<?php the_title_attribute(); ?>">
<?php else : ?>
<?php endif; ?>

<?php if ( get_field('custumPhoto03') ) : ?>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php the_field("custumPhoto03", $post->ID); ?>" alt="<?php the_title_attribute(); ?>">
<?php else : ?>
<?php endif; ?>

<?php if ( get_field('custumPhoto04') ) : ?>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php the_field("custumPhoto04", $post->ID); ?>" alt="<?php the_title_attribute(); ?>">
<?php else : ?>
<?php endif; ?>

<?php if ( get_field('custumPhoto05') ) : ?>
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php the_field("custumPhoto05", $post->ID); ?>" alt="<?php the_title_attribute(); ?>">
<?php else : ?>
<?php endif; ?>
            <ul class="postInfo">
                <li class="postDate">Posted at <time datetime="<?php the_time( 'Y-m-d G:i' ); ?>"><?php the_time( get_option('date_format') ); ?></time></li>
                <li class="postTag"><?php the_tags('Tag : ',' , '); ?></li>
<?php if ( get_field('siteUrl') ) : ?>
                <li class="postUrl"><a href="<?php the_field("siteUrl", $post->ID); ?>"><?php the_field("siteName", $post->ID); ?><i></i></a></li>
<?php else : ?>
<?php endif; ?>
            </ul>
        </section><!-- /loop end -->
<?php endwhile; endif; ?>

        <ul class="pageNavi">
<?php
    // postが無い場合は文字列""が返ってくる
    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if ( !empty( $next_post ) ):
    ?>
            <li class="next"><?php next_post_link('%link', '<i class="icon-double-angle-left"></i>Newer', TRUE); ?></li>
<?php
    endif;
    if( !empty( $prev_post ) ): ?>
            <li class="prev"><?php previous_post_link('%link', 'Older<i class="icon-double-angle-right"></i>', TRUE); ?></li>
<?php endif; ?>
        </ul><!-- /pagenavi -->
    </article><!-- /contents -->
</div><!-- /mainContent -->
<?php get_footer(); ?>
