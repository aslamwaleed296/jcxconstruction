<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['numberPrefix'] = array(
    'settings',
    'LBL_NUMBER_PREFIX',
    'LBL_NUMBER_PREFIX_DESC',
    './index.php?module=Administration&action=setnumprefix',
);

$admin_group_header[] = array(
    'LBL_SECTION_HEADER_NUMBER_PREFIX',
    '',
    false,
    $admin_option_defs, 
    'LBL_SECTION_DESCRIPTION_NUMBER_PREFIX'
);
