<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <div class="entry-meta">
            <span class="author"><?php the_author(); ?></span>
            <span class="date"><?php the_date(); ?></span>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <footer class="entry-footer">
        <div class="author-bio">
            <h2>About the Author</h2>
            <div class="author-avatar">
                <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
            </div>
            <div class="author-description">
                <h3><?php the_author(); ?></h3>
                <p><?php the_author_meta('description'); ?></p>
            </div>
        </div>
        <?php edit_post_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
    </footer>
</article>