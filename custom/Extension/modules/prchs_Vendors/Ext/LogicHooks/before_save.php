<?php

$hook_array['before_save'][] = Array(
    90,
    'set initial number and prefix in number field', 
    'custom/modules/prchs_Vendors/setVendorNumber.php', 
    'setVendorNumber', 
    'setNumber',
);
