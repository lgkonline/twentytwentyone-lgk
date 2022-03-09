<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$behance_projects_json = file_get_contents("https://lgk.io/site/index.php?action=GetProjects&s=" . get_search_query());
$behance_projects = json_decode($behance_projects_json);

function lgk_get_srcset($image_set_obj) {
    $singles = array();

    foreach ($image_set_obj as $key => $url) {
        if (is_numeric($key)) {
            array_push($singles, $url . " " . $key . "w");
        }
    }

    return implode(", ", $singles);
}

if (isset($behance_projects) && is_array($behance_projects) && count($behance_projects) > 0) {
    ?>
    <header class="page-header alignwide">
		<h1 class="page-title">Projects</h1>
	</header><!-- .page-header -->


    <?php foreach ($behance_projects as $project) : ?>
        <article class="post default-max-width">
            <h2 class="entry-title">
                <a href="https://lgk.io/site/projects/<?php echo $project->id; ?>"><?php echo $project->name; ?></a>
            </h2>

            <figure class="wp-block-image size-large">
                <a href="https://lgk.io/site/projects/<?php echo $project->id; ?>">
                    <img loading="lazy" width="1024" height="680" src="<?php echo $project->covers->{"115"} ?>" 
                        srcset="<?php echo lgk_get_srcset($project->covers); ?>" sizes="(max-width: 1024px) 100vw, 1024px">
                </a>
            </figure>
        </article>
    <?php endforeach; 
}

if ( have_posts() ) {
	?>
    <header class="page-header alignwide">
		<h1 class="page-title">Blog posts</h1>
	</header><!-- .page-header -->
	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
