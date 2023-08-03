<?php 

$dictionary['Account']['fields']['jcx_purchase_orders'] = array (
    'name' => 'jcx_purchase_orders',
    'vname' => 'LBL_JCX_PURCHASE_ORDERS',
    'type' => 'link',
    'relationship' => 'account_jcx_purchase_orders',
    'module' => 'jcx_purchase_orders',
    'bean_name' => 'jcx_purchase_orders',
    'source' => 'non-db',
);

$dictionary['Account']['relationships']['account_jcx_purchase_orders'] = array (
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'jcx_purchase_orders',
    'rhs_table' => 'jcx_purchase_orders',
    'rhs_key' => 'billing_account_id',
    'relationship_type' => 'one-to-many',
);
