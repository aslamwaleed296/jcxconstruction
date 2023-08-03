<?php
$layout_defs["Accounts"]["subpanel_setup"]['fp_event_locations'] = array (
  'order' => 100,
  'module' => 'FP_Event_Locations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FP_EVENT_LOCATIONS',
  'get_subpanel_data' => 'accounts_fp_event_locations_link',
  'top_buttons' =>
  array (
    0 =>
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
   1 =>
   array (
     'widget_class' => 'SubPanelTopSelectButton',
     'mode' => 'MultiSelect',
   ),
  ),
);
