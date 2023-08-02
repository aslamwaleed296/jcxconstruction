<?php

$layout_defs["Accounts"]["subpanel_setup"]['account_projects'] = array (
    'order' => 121,
    'module' => 'Project',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_PROJECTS_SUBPANEL_TITLE',
    'get_subpanel_data' => 'account_projects',
    'top_buttons' =>
    array(
        0 =>
        array(
            'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1 =>
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    ),
);
