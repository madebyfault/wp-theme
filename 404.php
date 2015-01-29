<?php get_header(); ?>
<div id="mainContent">
    <article id="contents">
        <header>
            <h1 id="contentsTitle">OOPS!</h1>
        </header><!-- /contentsHeader -->
        <section id="error">
            <img src="<?php bloginfo('template_url'); ?>/images/404dummy.png" data-original="<?php bloginfo('template_url'); ?>/images/404.png" alt="404 Error">
            <h1 class="error">404 Error</h1>
            <p class="Summary">File Not Found.</p>
        </section><!-- /error -->
    </article><!-- /contents -->
</div><!-- /mainContent -->
<?php get_footer(); ?>