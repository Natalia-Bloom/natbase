<?php

$SERVER_PATH = get_template_directory();

// •❅────────────✧❅✦❅✧────────────❅•
// Includes
// •················•················•

include_once $SERVER_PATH . '/includes/custom-post-types.php';
include_once $SERVER_PATH . '/includes/custom-taxonomies.php';
include_once $SERVER_PATH . '/includes/enqueues.php';
include_once $SERVER_PATH . '/includes/theme-options.php';

// •❅────────────✧❅✦❅✧────────────❅•
// Options
// •················•················•

include_once $SERVER_PATH . '/options/image-sizes.php';
include_once $SERVER_PATH . '/options/menus.php';
include_once $SERVER_PATH . '/options/shortcodes.php';
include_once $SERVER_PATH . '/options/sidebars.php';
