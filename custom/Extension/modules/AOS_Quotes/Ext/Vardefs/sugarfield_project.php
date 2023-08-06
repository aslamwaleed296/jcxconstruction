<?php

$dictionary["AOS_Quotes"]["fields"]["project_estimates"] = array(
    'name' => 'project_estimates',
    'type' => 'link',
    'relationship' => 'project_estimates_rel',
    'module' => 'Project',
    'bean_name' => 'Project',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_ESTIMATES',
);
$dictionary["AOS_Quotes"]["fields"]["project_estimates_name"] = array(
    'name' => 'project_estimates_name',
    'type' => 'relate',
    'id_name' => 'estimate_id',
    'source' => 'non-db',
    'vname' => 'LBL_NAME_PROJECT',
    'save' => true,
    'link' => 'project_estimates',
    'table' => 'project',
    'module' => 'Project',
);
$dictionary["AOS_Quotes"]["fields"]["estimate_id"] = array(
    'name' => 'estimate_id',
    'rname' => 'id',
    'type' => 'id',
    'dbType' => 'id',
    'vname' => 'LBL_ESTIMATE_ID',
    'table' => 'project',
    'module' => 'Project',
    'reportable' => false,
    'massupdate' => false,
    'isnull' => 'true',
    'required' => false,
    'duplicate_merge' => 'disabled',
);
$dictionary["AOS_Quotes"]["relationships"]["project_estimates_rel"] = array(
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'estimate_id',
    'relationship_type' => 'one-to-many',
);
