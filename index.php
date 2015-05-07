

<?php get_header();?>
<?php get_sidebar();?>
<div id="content">

<!--Start the Loop-->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="entry">
		<h2><a href="<?php the_permalink()"; ?><?php the_title(); ?> </a> </h2>
		<div class="entry-body">
		<?php the_content(); ?>
			<div class="post_metadata".
				<span class="author"> By <?php the_author_posts_link(); ?> </span>
				<span class="date"> By <?php the_time ('F jS, Y'); ?> </span>
				<span class="catagories"> See more in: <?php the_catagory( ' &rago; '); ?></span>
			</div>	
	</div>
	
		<?php endwhile; else: ?>
	<p></php _e('Sorry no posts matched your search. ');?> </p>
	<?php end if; ?>
<! -- End the Loop -->

</div>
<? get_footer(); ?>				