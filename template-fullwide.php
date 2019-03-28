<?php /* Template Name: Full Wide */ ?>
<?php get_header(); ?>
	<div class="main-content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php if(have_posts()){ ?>
						<div class="row">
							<?php while(have_posts()) : the_post(); ?>
								<?php get_template_part( 'content' ); ?>
							<?php endwhile; ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>