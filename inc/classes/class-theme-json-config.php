<?php

	namespace JohannesFSEWP;

	class ThemeJsonConfig
	{
		public function registerHooks()
		{
			add_filter('wp_theme_json_data_theme', [$this, 'composeThemeJson']);
		}

		# Build theme.json
		public function composeThemeJson($theme_json): mixed
    {
        # Load JSON files
        $theme_styles_raw = file_get_contents(get_template_directory() . '/theme-styles.json');
        $theme_settings_raw = file_get_contents(get_template_directory() . '/theme-settings.json');
				$theme_colors_raw = file_get_contents(get_template_directory() . '/theme-colors.json');
				$theme_spacing_raw = file_get_contents(get_template_directory() . '/theme-spacing.json');


        # Convert JSON to array
        $theme_styles = json_decode($theme_styles_raw, true);
        $theme_settings = json_decode($theme_settings_raw, true);
				$theme_colors = json_decode($theme_colors_raw, true);
				$theme_spacing = json_decode($theme_spacing_raw, true);

        # Inject data
        $new_data = [
            'version' => 3,
            'settings' => $theme_settings['settings'],
            'styles' => $theme_styles['styles']
        ];

				# merge fragments into theme.json settings
				$new_data['settings'] = array_merge_recursive(
					$new_data['settings'],
					$theme_colors['settings'] ?? [],
					$theme_spacing['settings'] ?? []
				);

        # Update WordPress theme.json
        return $theme_json->update_with($new_data);
    }


	}