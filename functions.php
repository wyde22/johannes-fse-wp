<?php
	namespace JohannesFSEWP;

	# include files
	require_once __DIR__ . '/inc/classes/class-theme-setup.php';
	require_once __DIR__ . '/inc/classes/class-theme-json-config.php';
	require_once __DIR__ . '/inc/classes/class-block-editor-autoload.php';
	# instantiate classes
	(new ThemeSetup)->registerHooks();
	(new ThemeJsonConfig)->registerHooks();
	(new BlockEditorAutoload)->registerHooks();