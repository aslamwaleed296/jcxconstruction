<?php

$hook_array['before_save'][] = Array(
    90,
    'set initial number and prefix in number field', 
    'custom/modules/Project/setProjectNumber.php', 
    'setProjectNumber', 
    'setNumber',
);
