<?php 

class setContractNumber {
    function setNumber($bean, $event, $arguments)
    {
        global $sugar_config, $db;

        if ($bean->fetched_row == false && isset($sugar_config['initial_number_and_prefix_settings']['Contracts'])) {
            $initial_number = $sugar_config['initial_number_and_prefix_settings']['Contracts']['initial_number'];
            $prefix = $sugar_config['initial_number_and_prefix_settings']['Contracts']['prefix'];

            if ($initial_number && $prefix) {
                $result = $db->query("select id, record_number from aos_contracts order by date_entered desc limit 1");
                $row = $db->fetchRow($result);

                if (empty($row['record_number'])) {
                    $bean->record_number = $prefix."-".$initial_number;
                } else {
                    $record_number = explode('-', $row['record_number']);
                    $number = $record_number[1];

                    if ($initial_number > $number) {
                        $bean->record_number = $prefix."-".$initial_number;
                    } else {
                        $number = $number + 1;
                        $bean->record_number = $prefix."-".$number;
                    }
                }
            }
        }
    }
}
