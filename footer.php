<div class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="leftalign">
                    <?php
                    $theme_url = 'https://www.cgsthemes.com/product-category/free-wordpress-themes';
                    $wp_url = 'https://wordpress.org';
                    echo '<p>'.esc_html_e('Proudly powered by ','cgs-fashion-trend').'<a href="'.esc_url($wp_url).'" target="_blank">'.esc_html_e('WordPress','cgs-fashion-trend' ).'</a> | <a href="'.esc_url($theme_url).'" target="_blank">'.esc_html_e('Cgs Fashion Trend.','cgs-fashion-trend').'</a></p>';
                    ?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="rightalign"></div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>