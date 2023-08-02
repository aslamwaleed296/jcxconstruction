<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary["Project"]["fields"]["account_projects"] = array(
    'name' => 'account_projects',
    'type' => 'link',
    'relationship' => 'account_projects_rel',
    'module' => 'Accounts',
    'bean_name' => 'Account',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT_PROJECTS',
);
$dictionary["Project"]["fields"]["account_projects_name"] = array(
    'name' => 'account_projects_name',
    'type' => 'relate',
    'id_name' => 'account_id',
    'source' => 'non-db',
    'vname' => 'LBL_NAME_ACCOUNT',
    'save' => true,
    'link' => 'account_projects',
    'table' => 'accounts',
    'module' => 'Accounts',
);
$dictionary["Project"]["fields"]["account_id"] = array(
    'name' => 'account_id',
    'rname' => 'id',
    'type' => 'id',
    'dbType' => 'id',
    'vname' => 'LBL_ACCOUNT_ID',
    'table' => 'accounts',
    'module' => 'Accounts',
    'reportable' => false,
    'massupdate' => false,
    'isnull' => 'true',
    'required' => true,
    'duplicate_merge' => 'disabled',
);
$dictionary["Project"]["relationships"]["account_projects_rel"] = array(
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
);


 // created: 2023-07-27 09:07:21
$dictionary['Project']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2023-07-30 14:36:15
$dictionary['Project']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2023-07-27 09:07:21
$dictionary['Project']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2023-07-30 14:36:15
$dictionary['Project']['fields']['account_c']['inline_edit']='1';
$dictionary['Project']['fields']['account_c']['labelValue']='Account';

 

 // created: 2023-07-27 09:07:21
$dictionary['Project']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2023-07-27 09:07:21
$dictionary['Project']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 
?>