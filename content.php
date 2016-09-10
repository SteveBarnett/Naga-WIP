<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php echo 'class="hentry"'; ?>>
	<?php if(!is_front_page()) : ?>
	<header>
		<h2 class="entry-title <?php if(is_page()) { echo "entry-title-page"; } ?>"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if(!is_page()) : ?>
		<div class="post-meta">
			<time class="entry-date updated" datetime="<?php the_date('c'); ?>" pubdate><?php echo get_the_date(); ?></time> By <?php the_author(); ?>
		</div>
	<?php endif; ?>
	</header>
<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
