<?php
	namespace JohannesFSEWP;

	# include files
	require_once __DIR__ . '/inc/classes/class-theme-setup.php';
	require_once __DIR__ . '/inc/classes/class-theme-json-config.php';

	# instantiate classes
	(new ThemeSetup)->registerHooks();
	(new ThemeJsonConfig)->registerHooks();