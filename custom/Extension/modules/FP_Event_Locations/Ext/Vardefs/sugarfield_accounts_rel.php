<?php
//ID
$dictionary['FP_Event_Locations']['fields']['jd_accounts_id'] = array(
    'name' => 'jd_accounts_id',
    'rname' => 'id',
    'vname' => 'LBL_JD_ACCOUNTS_ID',
    'type' => 'id',
    'table' => 'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    'dbType' => 'id',
    'reportable' => false,
    'audited' => true,
    'duplicate_merge' => 'disabled',
    'required' => false
);
//Name
$dictionary['FP_Event_Locations']['fields']['jd_accounts_name'] = array(
    'name' => 'jd_accounts_name',
    'rname' => 'name',
    'id_name' => 'jd_accounts_id',
    'vname' => 'LBL_JD_ACCOUNTS_NAME',
    'type' => 'relate',
    'link' => 'accounts_fp_event_locations_link',
    'table' => 'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    'source' => 'non-db',
    'required' => false,
);
//Link
$dictionary['FP_Event_Locations']['fields']['accounts_fp_event_locations_link']= array(
    'name'  =>  'accounts_fp_event_locations_link',
    'type'  =>  'link',
    'relationship'  =>  'accounts_tc_outlook_emails_rel',
    'module' => 'Accounts',
    'bean_name' => 'Account',
    'source' => 'non-db',
    'vname' => 'LBL_JD_ACCOUNTS_LINK',
);
//Relationship
$dictionary["FP_Event_Locations"]["relationships"]["accounts_tc_outlook_emails_rel"]= array(
    'lhs_module' => 'Accounts',
    'lhs_table' =>  'accounts',
    'lhs_key'   =>  'id',
    'rhs_module'    =>  'FP_Event_Locations',
    'rhs_table'     =>  'fp_event_locations',
    'rhs_key'   =>  'jd_accounts_id',
    'relationship_type' =>  'one-to-many'
);
