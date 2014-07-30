		</div><!-- /#content -->
		<?php flo_part('bottom-page'); ?>
		<footer id="footer-main" class="footer-main cf" role="contentinfo">
			<p class="copy">
			<?php if (flo_get_option('copyrights')) : ?>
				<?php echo flo_option('copyrights'); ?>
			<?php else: ?>
				&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
			<?php endif; ?>
			</p>
			<p class="madeby">
				<?php _e('Site by', 'flotheme'); ?> <a href="http://flosites.com" rel="external"><?php _e('Floagency', 'flotheme'); ?></a>
			</p>
		</footer>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>