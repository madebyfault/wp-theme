<?php get_header(); ?>
<div id="mainContent">
    <article id="contents">
        <header>
            <h1 id="contentsTitle">Profile</h1>
        </header><!-- /contentsHeader -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section id="profile">
            <h1><?php the_title(); ?></h1>
            <p class="Summary"><?php $content = get_the_content(); $content = preg_replace("/\n/","<br />",$content); echo $content; ?></p>
        </section><!-- /profile -->
<?php endwhile; endif; ?>
    </article><!-- /contents -->
</div><!-- /mainContent -->
<?php get_footer(); ?>