			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<?php 
					$indexPage = get_page_by_title( 'index' );
					$chinese_page = CFS()->get( 'chinese_page' );
				?>
				<div class="content-wrapper">
					<div class="company-info">
						<ul>
							<li><i class="fa fa-phone"></i>(+86) 21 6051 7886</li>
							<li><i class="fa fa-envelope"></i>info@dragongroup.asia</li>

							<li class="chinese_text"><i class="fa fa-map-marker"></i><?php echo CFS()->get( 'company_address_cn', $indexPage->ID ); ?></li>
							<li class="english_text"><i class="fa fa-map-marker"></i><?php echo CFS()->get( 'company_address', $indexPage->ID ); ?></li>
						</ul>
					</div>
				 	<div class="social-media-icons">
						<ul>
							<li><a href="https://www.facebook.com/DragonGroupAsia/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/company/2883410"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/dragongroupasia/"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<img class="wechat-code" src="<?php echo get_template_directory_uri(); ?>/img/icons/DGA_QRcode.jpg">
					</div>
					<div class="copyright">
						<p>&copy; <?php echo date('Y'); ?><?php echo CFS()->get( 'copyright', $indexPage->ID  ) ?></p>
					</div>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-79949910-1', 'dragongroup.asia');
		ga('send', 'pageview');
		</script>

	</body>
</html>
