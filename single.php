<?php get_header(); ?>

	<div id="content_single" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
						<h3>
							Posted by <span><?php the_author() ?></span>  |  Posted in <span><?php the_category(', ') ?></span>  |  Posted on <?php the_time('d-m-Y') ?>
						</h3>
                    </div>
					<h4><?php comments_number('0', '1', '%'); ?></h4>
                </div>

				<div class="entry">
					<?php theme_google_300_ads_show(); ?>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<?php theme_google_468_ads_show(); ?>
				</div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
