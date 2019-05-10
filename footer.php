
            
        </div>
    </div>

	<div id="body_right">
        <div id="sidebar_ads"><?php if(function_exists('theme_ads_show')) theme_ads_show(); ?></div>
		<div id="sidebars">
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>
</div>

<div id="footer">
	<div id="footer_logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
	<div id="footer_text">
    	<p>&copy; All Rights Reserved. <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></p>
		<p class="designed">Powered by <a href="http://wordpress.org/">WordPress</a> | Theme by <a href="http://www.webhostingreport.com/best-dedicated-hosting.html">Dedicated Web Hosting</a></p>
    </div>
</div>

		<?php wp_footer(); ?>


</div>
<?php theme_twitter_show(); ?>

<!--%@##--><div style="margin: 1em 0 3em 0; text-align: center;">Find more free <a href="http://www.freewebtemplates.com/wordpress-themes/">WordPress themes</a> at <a href="http://www.freewebtemplates.com/">Free Website Templates</a>.</div><!--##@%-->
</body>
</html>