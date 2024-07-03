<?php
add_action( 'admin_init', 'goldy_cloud_remove_menu_pages' );

function goldy_cloud_remove_menu_pages() {          
	remove_submenu_page( 'themes.php', 'goldy-mex-about' );                                          
}

function goldy_cloud_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'goldy-cloud' ), esc_html__( 'About Theme', 'goldy-cloud' ), 'edit_theme_options', 'goldy-cloud-about', 'goldy_cloud_about_display' );
}
add_action( 'admin_menu', 'goldy_cloud_about_menu' );

function goldy_cloud_about_display(){
	?>
	<div class="goldy_cloud_about_data">
		<div class="goldy_cloud_about_title">
			<h1><?php echo esc_html( 'Goldy Cloud', 'goldy-cloud' ); ?></h1>
			<div class="goldy_cloud_about_theme">
				<div class="goldy_cloud_about_description">
					<p>
					<?php echo esc_html( 'Goldy Cloud is a clean, modern, user friendly, responsive and highly customizable WordPress theme that is specifically designed for cloudes and companies operating in the finance, cloud and all modern technology company. you’ll easily find the design of this theme impressive and suitable for your Website. This Goldy Cloud WordPress theme, carries an abundance of crucial features and functionalities. For instance, featured slider, featured Section, About Section, Our Portfolio, Book an Appointment, Our team Section, Testimonial Slider, Our Services, Our Sponsors, Pricing Plan, Sticky Header, Social Information, Sidebar, Excerpt Options, and many more. All of these highly customizable features and sections are completely responsive and absolutely easy to customize.', 'goldy-cloud' ); ?>
					</p>
					<div class="goldy_cloud_about_demo">
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free Theme Demo', 'goldy-cloud' ); ?></h3>
								<?php $theme_demo_url = 'https://inverstheme.com/themedemo/goldy-cloud/'; ?>
								<a href="<?php echo esc_url($theme_demo_url); ?>"><?php echo esc_html( 'Theme Demo ', 'goldy-cloud' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Documentation', 'goldy-cloud' ); ?></h3>
								<?php $theme_doc_url = 'https://www.inverstheme.com/goldy-cloud-documentation/'; ?>
								<a href="<?php echo esc_url($theme_doc_url); ?>"><?php echo esc_html( 'Read Documentation', 'goldy-cloud' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free VS Pro', 'goldy-cloud' ); ?></h3>
								<?php $theme_compare_url = 'https://www.inverstheme.com/theme/goldy-cloud-pro/'; ?>
								<a href="<?php echo esc_url($theme_compare_url); ?>"><?php echo esc_html( 'Compare free Vs Pro ', 'goldy-cloud' ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="goldy_cloud_about_image">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'goldy-cloud' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'For Shortcode', 'goldy-cloud' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( "For Displaying Theme Sections in Page or Post Put the Shortcode Which Is Given Below.", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Featured Slider : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_featuredimage_slider']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Featured Section : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_featured_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Our Portfolio : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_portfolio_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "About Us : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_about_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Book an Appointment : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_appointment_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Our Team : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_team_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Our Testimonial : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_testimonial_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Pricing Plan : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_cloud_pricing_plan_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Our Sponsors : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_our_sponsors_section']", 'goldy-cloud' ); ?></p>
						<p><strong><?php echo esc_html( "Our Services : ", 'goldy-cloud' ); ?></strong><?php echo esc_html( "[themesection section='goldy_mex_services_section']", 'goldy-cloud' ); ?></p>
					</div>
				</div>
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'goldy-cloud' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'goldy-cloud' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'goldy-cloud' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'goldy-cloud' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether its customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'goldy-cloud' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://www.inverstheme.com/contact-us/"><?php echo esc_html( 'Support Forum', 'goldy-cloud' ); ?></a>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<?php
}
?>