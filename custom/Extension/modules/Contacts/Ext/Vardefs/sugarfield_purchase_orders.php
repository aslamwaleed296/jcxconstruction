<?php 

$dictionary['Contact']['fields']['jcx_purchase_orders'] = array (
    'name' => 'jcx_purchase_orders',
    'vname' => 'LBL_JCX_PURCHASE_ORDERS',
    'type' => 'link',
    'relationship' => 'contact_jcx_purchase_orders',
    'module' => 'jcx_purchase_orders',
    'bean_name' => 'jcx_purchase_orders',
    'source' => 'non-db',
);

$dictionary['Contact']['relationships']['contact_jcx_purchase_orders'] = array (
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'jcx_purchase_orders',
    'rhs_table' => 'jcx_purchase_orders',
    'rhs_key' => 'billing_contact_id',
    'relationship_type' => 'one-to-many',
);
