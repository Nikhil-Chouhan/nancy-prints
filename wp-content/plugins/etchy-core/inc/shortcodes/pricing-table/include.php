<?php

include_once ETCHY_CORE_SHORTCODES_PATH . '/pricing-table/pricing-table.php';

foreach ( glob( ETCHY_CORE_SHORTCODES_PATH . '/pricing-table/variations/*/include.php' ) as $variation ) {
	include_once $variation;
}