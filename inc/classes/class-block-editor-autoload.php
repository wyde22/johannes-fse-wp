<?php

namespace JohannesFSEWP;

class BlockEditorAutoload
{
	public function registerHooks(): void
	{
			add_action('init', [$this, 'registerBlocksAssets']);
	}

	# Charger automatiquement les styles de blocs du dossier /assets/css/
	public function registerBlocksAssets(): void
	{
			$files = glob(get_template_directory() . '/assets/css/*.css');

			foreach ($files as $file) {
					$filename   = basename($file, '.css');
					$block_name = str_replace('core-', 'core/', $filename);

					wp_enqueue_block_style(
							$block_name,
							[
									'handle' => "capitaine-{$filename}",
									'src'    => get_theme_file_uri("assets/css/{$filename}.css"),
									'path'   => get_theme_file_path("assets/css/{$filename}.css"),
									'ver'    => filemtime(get_theme_file_path("assets/css/{$filename}.css")),
							]
					);
			}
	}

}