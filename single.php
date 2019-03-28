<?php get_header(); ?>
<div class="main-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-9">
				<?php if(have_posts()){ ?>
					<div class="row">
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part( 'content' ); ?>
						<?php endwhile; ?>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<?php
							wp_link_pages(
								array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html_e( 'Pages:', 'cgs-fashion-trend' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . esc_html_e( 'Page', 'cgs-fashion-trend' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								)
							);
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
					        <?php if ( comments_open() || '0' != get_comments_number() ) : ?>
						        <?php comments_template( '', true ); ?>
                            <?php endif; ?>
						</div>
					</div>
                    <div class="row tagsrow">
                        <div class="col-xl-12">
	                        <?php $tag_lists = get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
	                        <?php echo esc_html($tag_lists); ?>
                        </div>
                    </div>
				<?php } else { ?>
					<h5><?php esc_html_e( 'Posts not found', 'cgs-fashion-trend' ); ?></h5>
					<?php get_search_form(); ?>
				<?php } ?>
			</div>
            <div class="col-xl-3"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
