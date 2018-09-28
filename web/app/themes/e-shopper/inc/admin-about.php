<?php

/**
 * Title: About
*
* Description: Displays list of all CyberChimps theme linking to it's pro and free versions.
*
* Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
* should be made in a child theme.
*
* @category CyberChimps Framework
* @package  Framework
* @since    1.0
* @author   CyberChimps
* @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
* @link     http://www.cyberchimps.com/
*/

// Add stylesheet and JS for upsell page.
function cyberchimps_about_style() {

	// Set template directory uri
	$directory_uri = get_template_directory_uri();


	wp_enqueue_style( 'about_style', get_template_directory_uri() . '/inc/css/about.css' );

}

// Add upsell page to the menu.
function cyberchimps_add_about() {
	$page = add_theme_page(
			'About e-Shopper',
			'About e-Shopper',
			'administrator',
			'cyberchimps-responsive',
			'cyberchimps_display_about'
	);

	add_action( 'admin_print_styles-' . $page, 'cyberchimps_about_style' );
}

add_action( 'admin_menu', 'cyberchimps_add_about' );

// Define markup for the upsell page.
function cyberchimps_display_about() {

	// Set template directory uri
	$theme      = wp_get_theme();
	?>
	<div class="about-container">

		<div class="about-info">
			<h1><?php echo "e-Shopper - ".$theme['Version'] ?></h1>
			<?php
				$directory_uri = get_template_directory_uri();

			?>
			<span><img src="<?php echo $directory_uri ?>/inc/images/branding/logo.png"></span>
			<?php printf( '<p>CyberChimps\' first e-commerce WordPress theme which will transform your WordPress site into an amazing e-store with a huge selection of products. It is designed to provide an easy and pleasant shopping experience. It has many promotional areas like product slider, latest products tab etc.'
			); ?>
		</div>

		<div class="features">
			<table class="features-table">
			<thead>
			<tr>
				<th class=""></th>
				<th>e-Shopper</th>
				<th>e-Shopper Pro</th>
			</tr>
			<tr>
			<td class="feature">Compatible with WooCommerce</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Responsive layout <p>Works on every device</p></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Typography & Fonts
			<p>(Supports Google Fonts , option available for changing header & text font)</p></td>
			<td class="featureyes"><span class="dashicons-before dashicons-yes"></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Include post format icons on blog page</td>
			<td class="featureyes"><span class="dashicons-before dashicons-yes"></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Drag & Drop Visual Elements for blog and pages</td>
			<td class="featureyes">3</span></td>
			<td class="featureyes">15</span></td>
			</tr>
			<tr>
			<td class="feature">Custom Sidebar Templates</td>
			<td class="featureyes">2</span></td>
			<td class="featureyes">5</span></td>
			</tr>
			<tr>
			<td class="feature">Widgetized areas</td>
			<td class="featureyes">3</span></td>
			<td class="featureyes">7</span></td>
			</tr>
			<tr>
			<td class="feature">Custom Menus</td>
			<td class="featureyes">2</span></td>
			<td class="featureyes">3</span></td>
			</tr>
			<tr>
			<td class="feature">Header Drag & Drop Options</td>
			<td class="featureyes">3</span></td>
			<td class="featureyes">8</span></td>
			</tr>
			<tr>
			<td class="feature">Option to add Google Analytics code</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Enhanced WooCommerce Functionality <p>Mini Cart, Latest Products</p></td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

						<tr>
						<td class="feature">Custom Header, Footer Scripts</td>
						<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
						<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
						</tr>
						<tr>
						<td class="feature">Ready-to-use Color Schemes (Skins)</td>
						<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
						<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
						</tr>


			<tr>
			<td class="feature">High Priority Support via Helpdesk</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>


			</thead>
			</table>
		</div>
		<div class="buy">
		<a class="button button-primary buylink" target="_blank" href="https://cyberchimps.com/store/e-shopper-pro/?utm_source=about">Buy e-Shopper Pro</a>
		</div>
	</div>
<?php
}
