<?php

require_once QODE_FRAMEWORK_SHORTCODES_PATH . '/shortcodes.php';
require_once QODE_FRAMEWORK_SHORTCODES_PATH . '/shortcode.php';

foreach ( glob( QODE_FRAMEWORK_SHORTCODES_PATH . '/translators/*/*-translator.php' ) as $translator ) {
	require_once $translator;
}