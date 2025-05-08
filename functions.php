<?php
	namespace JohannesFSEWP;

	# include files
	require_once __DIR__ . '/inc/classes/class-theme-setup.php';

	# instantiate classes
	(new ThemeSetup)->registerHooks();