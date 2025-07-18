<?php

use ColibriWP\Theme\Translations;
use Kubio\Theme\Theme;

wp_localize_script(
	get_template() . '-page-info',
	'dacnis_admin',
	array(
		'getStartedData'    => array(
			'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
			'activate'                    => Translations::escHtml( 'activate' ),
			'activating'                  => Translations::get( 'activating', 'Kubio Page Builder' ),
			'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : '',
			'theme_prefix'                => Theme::prefix( '', false ),
		),
		'builderStatusData' => array(
			'status'                          => dacnis_theme()->getPluginsManager()->getPluginState( dacnis_get_builder_plugin_slug() ),
			'install_url'                     => dacnis_theme()->getPluginsManager()->getInstallLink( dacnis_get_builder_plugin_slug() ),
			'activate_url'                    => dacnis_theme()->getPluginsManager()->getActivationLink( dacnis_get_builder_plugin_slug() ),
			'slug'                            => dacnis_get_builder_plugin_slug(),
			'kubio_front_set_predesign_nonce' => wp_create_nonce( 'kubio_front_set_predesign_nonce' ),
			'kubio_disable_big_notice_nonce'  => wp_create_nonce( 'kubio_disable_big_notice_nonce' ),
			'plugin_activate_nonce'           => wp_create_nonce( 'plugin_activate_nonce' ),
			'messages'                        => array(
				'installing' => Translations::get( 'installing', 'Kubio Page Builder' ),
				'activating' => Translations::get( 'activating', 'Kubio Page Builder' ),
				'preparing'  => Translations::get( 'preparing_front_page_installation' ),
			),
			'view_demos_url'                  => add_query_arg(
				array(
					'page' => 'kubio-get-started',
					'tab'  => 'demo-sites',
				),
				admin_url( 'admin.php' )
			),
		),
	)
);
?>

<div class="dacnis-admin-big-notice--container">
	<div class="logo-holder">
		<h2><?php echo sprintf( __( 'Choose one of the %s predefined designs to start with:', 'dacnis' ), ucfirst( get_stylesheet() ) ); ?></h2>
	</div>
	<div class="content-holder">
		<ul class="predefined-front-pages">
			<?php
			$front_page_designs = array(
				array(
					'name'    => __( 'Modern', 'dacnis' ),
					'index'   => 1,
					'preview' => 'front-page-1.jpg',
				),

				array(
					'name'    => __( 'Fullscreen', 'dacnis' ),
					'index'   => 2,
					'preview' => 'front-page-2.jpg',
				),

				array(
					'name'    => __( 'Classic', 'dacnis' ),
					'index'   => 3,
					'preview' => 'front-page-3.jpg',
				),

				array(
					'name'    => __( '', 'dacnis' ),
					'index'   => 4,
					'preview' => 'admin/ai-icon.svg',
				),
			);

			foreach ( $front_page_designs as $dacnis_design_index => $design ) :
				?>
				<?php
					$dacnis_design_selected = $dacnis_design_index === 0 ? 'selected' : '';
					$preview_image_name     = isset( $design['preview'] ) ? $design['preview'] : "front-page-{$design['index']}.png";
				?>
				<li data-index="<?php echo esc_attr( $design['index'] ); ?>"
					class="<?php echo $dacnis_design_selected; ?>">

					<div class="predefined-front-page-card">
						<div class="selected-badge"></div>

						<div class="predefined-front-page-card-header">
							<h3 class="design-title">
								<?php echo esc_html( $design['name'] ); ?>
							</h3>
						</div>
						<div class="front-page-design-wrapper">
							<div class="design-preview-image"
								 style="background-image: url(<?php echo esc_attr( dacnis_theme()->getAssetsManager()->getBaseURL() . "/images/{$preview_image_name}" ); ?>)"
							></div>
						</div>

						<?php
						if ( $design['name'] === '' ) {
							?>
								<div class="predefined-front-page-card-footer">
									<h3 class="design-content">
										<?php echo 'Generate a tailored website in minutes using AI'; ?>
									</h3>
								</div>
							<?php
						}
						?>

					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="content-footer ">
		<div class="action-buttons">
			<button class="button button-primary button-hero start-with-predefined-design-button">
				<?php Translations::escHtmlE( 'start_with_selected_page' ); ?>
			</button>
			<a role="button" class="view-all-demos">
				<?php Translations::escHtmlE( 'check_all_demo_sites_page' ); ?>
			</a>
		</div>
		<div>
			<div class="plugin-notice">
				<span class="spinner"></span>
				<span class="message"></span>
			</div>
		</div>
		<div>
			<p class="description large-text"><?php Translations::escHtmlE( 'start_with_a_front_page_plugin_info' ); ?></p>
		</div>
	</div>
</div>
