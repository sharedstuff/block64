<?php

# enqueue css: reset -> normalize -> base -> style
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.css'));
	wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'));
	wp_enqueue_style('base', get_theme_file_uri('/assets/css/base.css'));
	wp_enqueue_style('style', get_stylesheet_uri());
});

# remove core block patterns
add_action('after_setup_theme', function () {
	remove_theme_support('core-block-patterns');
});

# set new image sizes (srcset will be adjusted automagically)
add_action('init', function () {
	remove_image_size('1536x1536');
	remove_image_size('2048x2048');
	add_image_size('192', 192, 192, false);
	add_image_size('256', 256, 256, false);
	add_image_size('360', 360, 360, false);
	add_image_size('512', 512, 512, false);
	add_image_size('720', 720, 720, false);
	add_image_size('1080', 1080, 1080, false);
	add_image_size('1440', 1440, 1440, false);
	add_image_size('1920', 1920, 1920, false);
	add_image_size('2560', 2560, 2560, false);
	add_image_size('3840', 3840, 3840, false);
});

# remove the "medium_large" size
add_filter('intermediate_image_sizes', function ($sizes) {
	return array_diff($sizes, ['medium_large']);
});



/* ------------------
https://kulturbanause.de/blog/theme-options-page-fur-wordpress-erstellen/
------------------ */

add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');

// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init()
{
	register_setting('block64_options', 'block64_theme_options', 'block64_validate_options');
}

// Seite in der Dashboard-Navigation erstellen
function theme_options_add_page()
{
	add_theme_page('Optionen', 'Optionen', 'edit_theme_options', 'theme-optionen', 'block64_theme_options_page'); // Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion
}

// Optionen-Seite erstellen
function block64_theme_options_page()
{
	global $select_options, $radio_options;
	if (!isset($_REQUEST['settings-updated']))
		$_REQUEST['settings-updated'] = false; ?>

	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>
			<?php bloginfo('name'); ?> Options
		</h2>

		<?php if (false !== $_REQUEST['settings-updated']) : ?>
			<div class="updated fade">
				<p><strong>Einstellungen gespeichert!</strong></p>
			</div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields('block64_options'); ?>
			<?php $options = get_option('block64_theme_options'); ?>


			<h2>Site</h2>
			<p>Please provide links to important pages.<br>This options will be used inside the processual generated footer</p>
			<table class="form-table">

				<!-- Site_Imprint -->
				<tr valign="top">
					<th scope="row">Site_Imprint</th>
					<td><input id="block64_theme_options[Site_Imprint]" class="regular-text" type="text" name="block64_theme_options[Site_Imprint]" value="<?php esc_attr_e($options['Site_Imprint']); ?>" /></td>
				</tr>

				<!-- Site_PrivacyPolicy -->
				<tr valign="top">
					<th scope="row">Site_PrivacyPolicy</th>
					<td><input id="block64_theme_options[Site_PrivacyPolicy]" class="regular-text" type="text" name="block64_theme_options[Site_PrivacyPolicy]" value="<?php esc_attr_e($options['Site_PrivacyPolicy']); ?>" /></td>
				</tr>

				<!-- Site_TermsConditions -->
				<tr valign="top">
					<th scope="row">Site_TermsConditions</th>
					<td><input id="block64_theme_options[Site_TermsConditions]" class="regular-text" type="text" name="block64_theme_options[Site_TermsConditions]" value="<?php esc_attr_e($options['Site_TermsConditions']); ?>" /></td>
				</tr>

				<!-- Site_Contact -->
				<tr valign="top">
					<th scope="row">Site_Contact</th>
					<td><input id="block64_theme_options[Site_Contact]" class="regular-text" type="text" name="block64_theme_options[Site_Contact]" value="<?php esc_attr_e($options['Site_Contact']); ?>" /></td>
				</tr>

			</table>


			<h2>Organization</h2>
			<p>Please provide information on your Organization.<br>This options will be used inside the processual generated footer</p>
			<p><a href="https://schema.org/Organization" target="_blank">https://schema.org/Organization</a></p>

			<table class="form-table">

				<!-- Organization_name -->
				<tr valign="top">
					<th scope="row">Organization_name</th>
					<td><input id="block64_theme_options[Organization_name]" class="regular-text" type="text" name="block64_theme_options[Organization_name]" value="<?php esc_attr_e($options['Organization_name']); ?>" /></td>
				</tr>

				<!-- Organization_url -->
				<tr valign="top">
					<th scope="row">Organization_url</th>
					<td><input id="block64_theme_options[Organization_url]" class="regular-text" type="text" name="block64_theme_options[Organization_url]" value="<?php esc_attr_e($options['Organization_url']); ?>" /></td>
				</tr>

				<!-- Organization_email -->
				<tr valign="top">
					<th scope="row">Organization_email</th>
					<td><input id="block64_theme_options[Organization_email]" class="regular-text" type="text" name="block64_theme_options[Organization_email]" value="<?php esc_attr_e($options['Organization_email']); ?>" /></td>
				</tr>

				<!-- Organization_telephone -->
				<tr valign="top">
					<th scope="row">Organization_telephone</th>
					<td><input id="block64_theme_options[Organization_telephone]" class="regular-text" type="text" name="block64_theme_options[Organization_telephone]" value="<?php esc_attr_e($options['Organization_telephone']); ?>" /></td>
				</tr>

				<!-- Organization_faxNumber -->
				<tr valign="top">
					<th scope="row">Organization_faxNumber</th>
					<td><input id="block64_theme_options[Organization_faxNumber]" class="regular-text" type="text" name="block64_theme_options[Organization_faxNumber]" value="<?php esc_attr_e($options['Organization_faxNumber']); ?>" /></td>
				</tr>

			</table>


			<h3>Organization PostalAddress</h3>
			<p>Please provide information on your Organization's PortalAddress.<br>This options will be used inside the processual generated footer</p>
			<p><a href="https://schema.org/PostalAddress" target="_blank">https://schema.org/PostalAddress</a></p>

			<table class="form-table">

				<!-- Organization_address_PostalAddress_addressLocality -->
				<tr valign="top">
					<th scope="row">Organization_address_PostalAddress_addressLocality</th>
					<td><input id="block64_theme_options[Organization_address_PostalAddress_addressLocality]" class="regular-text" type="text" name="block64_theme_options[Organization_address_PostalAddress_addressLocality]" value="<?php esc_attr_e($options['Organization_address_PostalAddress_addressLocality']); ?>" /></td>
				</tr>

				<!-- Organization_address_PostalAddress_postalcode -->
				<tr valign="top">
					<th scope="row">Organization_address_PostalAddress_postalcode</th>
					<td><input id="block64_theme_options[Organization_address_PostalAddress_postalcode]" class="regular-text" type="text" name="block64_theme_options[Organization_address_PostalAddress_postalcode]" value="<?php esc_attr_e($options['Organization_address_PostalAddress_postalcode']); ?>" /></td>
				</tr>

				<!-- Organization_address_PostalAddress_streetAddress -->
				<tr valign="top">
					<th scope="row">Organization_address_PostalAddress_streetAddress</th>
					<td><input id="block64_theme_options[Organization_address_PostalAddress_streetAddress]" class="regular-text" type="text" name="block64_theme_options[Organization_address_PostalAddress_streetAddress]" value="<?php esc_attr_e($options['Organization_address_PostalAddress_streetAddress']); ?>" /></td>
				</tr>

			</table>


			<h2>SocialMedia</h2>
			<p>Please provide links to your SocialMedia identities.<br>This options will be used inside the processual generated footer</p>
			<table class="form-table">

				<!-- SocialMedia_Facebook -->
				<tr valign="top">
					<th scope="row">SocialMedia_Facebook</th>
					<td><input id="block64_theme_options[SocialMedia_Facebook]" class="regular-text" type="text" name="block64_theme_options[SocialMedia_Facebook]" value="<?php esc_attr_e($options['SocialMedia_Facebook']); ?>" /></td>
				</tr>

				<!-- SocialMedia_YouTube -->
				<tr valign="top">
					<th scope="row">SocialMedia_YouTube</th>
					<td><input id="block64_theme_options[SocialMedia_YouTube]" class="regular-text" type="text" name="block64_theme_options[SocialMedia_YouTube]" value="<?php esc_attr_e($options['SocialMedia_YouTube']); ?>" /></td>
				</tr>

				<!-- SocialMedia_Instagram -->
				<tr valign="top">
					<th scope="row">SocialMedia_Instagram</th>
					<td><input id="block64_theme_options[SocialMedia_Instagram]" class="regular-text" type="text" name="block64_theme_options[SocialMedia_Instagram]" value="<?php esc_attr_e($options['SocialMedia_Instagram']); ?>" /></td>
				</tr>

			</table>


			<!-- submit -->
			<p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern" /></p>

		</form>
	</div>
<?php }

// Strip HTML-Code:
// Hier kann definiert werden, ob HTML-Code in einem Eingabefeld
// automatisch entfernt werden soll. Soll beispielsweise im
// Copyright-Feld KEIN HTML-Code erlaubt werden, kommentiert die Zeile
// unten wieder ein. http://codex.wordpress.org/Function_Reference/wp_filter_nohtml_kses
function block64_validate_options($input)
{
	// $input['copyright'] = wp_filter_nohtml_kses( $input['copyright'] );
	return $input;
}
