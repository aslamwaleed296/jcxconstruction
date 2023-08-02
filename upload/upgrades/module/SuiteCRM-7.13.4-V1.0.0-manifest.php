<?php
$manifest = array (
  'author' => 'Waleed',
  'published_date' => '2023-07-31 20:08:00',
  'type' => 'module',
  'key' => 'SuiteCRM7.13.4-V1.0.0_2023-07-31_20:08:00',
  'name' => 'SuiteCRM7.13.4-V1.0.0',
  'description' => 'One to many relationship between accounts and project',
  'version' => 'v1.0.0',
  'is_uninstallable' => true,
  'acceptable_sugar_versions' => 
  array (
    'regex_matches' => 
    array (
      0 => '6\\.*',
      1 => '7\\.*',
      2 => '8\\.*',
      3 => '9\\.*',
      4 => '10\\.*',
    ),
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ULT',
    1 => 'CE',
    2 => 'PRO',
    3 => 'ENT',
  ),
  'readme' => 'README.txt',
  'remove_tables' => 'prompt',
);
$installdefs = array (
  'id' => 'SuiteCRM7.13.4-V1.0.0',
  'copy' => 
  array (
    array (
      'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Vardefs',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs',
    ),
    array (
      'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Layoutdefs',
      'to' => 'custom/Extension/modules/Accounts/Ext/Layoutdefs',
    ),
    array (
      'from' => '<basepath>/custom/modules/Accounts/metadata',
      'to' => 'custom/modules/Accounts/metadata',
    ),
    array (
      'from' => '<basepath>/custom/Extension/modules/Project/Ext/Vardefs',
      'to' => 'custom/Extension/modules/Project/Ext/Vardefs',
    ),
    array (
      'from' => '<basepath>/custom/Extension/modules/Project/Ext/Language',
      'to' => 'custom/Extension/modules/Project/Ext/Language',
    ),
    array (
      'from' => '<basepath>/custom/modules/Project/metadata',
      'to' => 'custom/modules/Project/metadata',
    ),
  ),
);
