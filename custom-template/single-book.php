<?php
get_header();

while (have_posts()) :
    the_post();

    $author         = get_field('author');
    $genre          = get_field('genre');
    $published_date = get_field('published_date');
?>

<div class="book-container">

    <h1 class="book-title">
        <?php the_title(); ?>
    </h1>

    <div class="book-meta">

        <p>
            <strong>Author:</strong>
            <?php echo esc_html($author); ?>
        </p>

        <p>
            <strong>Genre:</strong>
            <?php echo esc_html($genre); ?>
        </p>

        <p>
            <strong>Published Date:</strong>
            <?php echo esc_html($published_date); ?>
        </p>

    </div>

    <div class="book-description">

        <h2>Description</h2>

        <?php the_content(); ?>

    </div>

</div>

<?php
endwhile;

get_footer();