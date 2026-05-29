<?php
/**
 * Plugin Name: Books Assignment
 * Description: Books Assignment Functionality
 * Version: 1.0
 * Author: Gayatri Pol
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Restrict Books Access
 */
function books_assignment_restrict_access() {

    if (
        (is_singular('book') || is_post_type_archive('book'))
        && !is_user_logged_in()
    ) {

        wp_die(
            '
            <div style="max-width:600px;margin:80px auto;text-align:center;">
                <h2>You must be logged in to view this content.</h2>
                <p>Please log in or register.</p>
                <p>
                    <a href="' . wp_login_url($_SERVER['REQUEST_URI']) . '">
                        Login
                    </a>
                </p>
            </div>'
        );
    }
}
add_action('template_redirect', 'books_assignment_restrict_access');


/**
 * Books List Shortcode
 * Usage: [books_list]
 */
function books_list_shortcode() {

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $query = new WP_Query(array(
        'post_type'      => 'book',
        'post_status'    => 'publish',
        'posts_per_page' => 5,
        'paged'          => $paged
    ));

    ob_start();

    if ($query->have_posts()) :

        echo '<div class="books-list">';

        while ($query->have_posts()) :
            $query->the_post();

            $author = get_field('author');
            $genre  = get_field('genre');
            ?>

            <div class="book-card">

                <h3 class="book-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <p>
                    <strong>Author:</strong>
                    <?php echo esc_html($author); ?>
                </p>

                <p>
                    <strong>Genre:</strong>
                    <?php echo esc_html($genre); ?>
                </p>

            </div>

            <?php

        endwhile;

        echo '</div>';

        echo '<div class="books-pagination">';

        echo paginate_links(array(
            'total'   => $query->max_num_pages,
            'current' => $paged
        ));

        echo '</div>';

        wp_reset_postdata();

    else :

        echo '<p>No books found.</p>';

    endif;

    return ob_get_clean();
}
add_shortcode('books_list', 'books_list_shortcode');


/**
 * Frontend Styles
 */
function books_assignment_styles() {

    wp_register_style(
        'books-assignment-style',
        false
    );

    wp_enqueue_style(
        'books-assignment-style'
    );

    wp_add_inline_style(
        'books-assignment-style',
        '
        .books-list{
            max-width:900px;
            margin:30px auto;
        }

        .book-card{
            padding:20px;
            margin-bottom:20px;
            border:1px solid #ddd;
            border-radius:8px;
            background:#f9f9f9;
        }

        .book-title{
            margin-top:0;
            margin-bottom:15px;
        }

        .book-title a{
    text-decoration:none;
    color:#222;
    font-weight:700;
}

.book-title a:hover{
    color:#0073aa;
}

        .books-pagination{
            text-align:center;
            margin-top:30px;
        }

        .books-pagination .page-numbers{
            display:inline-block;
            margin:0 5px;
            padding:8px 12px;
            border:1px solid #ddd;
            text-decoration:none;
        }

        .books-pagination .current{
            background:#333;
            color:#fff;
        }

        @media(max-width:768px){

            .books-list{
                padding:15px;
            }

            .book-card{
                padding:15px;
            }

        }
        '
    );
}
add_action('wp_enqueue_scripts', 'books_assignment_styles');