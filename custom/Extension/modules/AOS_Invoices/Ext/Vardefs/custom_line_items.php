<?php

$dictionary["AOS_Invoices"]["fields"]['line_items'] =
array(
    'required' => false,
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'massupdate' => 0,
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'inline_edit' => false,
    'function' =>
        array(
            'name' => 'display_lines_custom',
            'returns' => 'html',
            'include' => 'custom/modules/AOS_Products_Quotes/Line_Items.php'
        ),
);

$dictionary["AOS_Invoices"]["fields"]['shipping_tax_amt'] =
array(
    'required' => false,
    'name' => 'shipping_tax_amt',
    'vname' => 'LBL_SHIPPING_TAX_AMT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => true,
    'len' => '26,6',
    'size' => '10',
    'enable_range_search' => false,
    'function' =>
        array(
            'name' => 'display_shipping_vat_custom',
            'returns' => 'html',
            'include' => 'custom/modules/AOS_Products_Quotes/Line_Items.php'
        ),
);
