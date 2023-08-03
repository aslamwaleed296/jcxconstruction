<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("modules/Administration/controller.php");

class CustomAdministrationController extends AdministrationController
{
    public function action_setnumprefix()
    {
        $this->view = 'setnumprefix';
    }

    public function action_savenumprefix()
    {
        if (isset($_REQUEST['module_name']) && !empty($_REQUEST['module_name'])) {
            $module = $_REQUEST['module_name'];
            if (isset($_REQUEST['initial_number']) && isset($_REQUEST['prefix'])) {
                $initial_number = $_REQUEST['initial_number'];
                $prefix = $_REQUEST['prefix'];
                if (!empty($initial_number) && $initial_number > 0 && !empty($prefix)) {
                    $configurations = new Configurator();
                    $configurations->loadConfig();
                    $configurations->config['initial_number_and_prefix_settings'][$module] = array(
                        'module' => $module,
                        'initial_number' => $initial_number,
                        'prefix' => $prefix,
                    );
                    $configurations->saveConfig();
                }
            }
        }
        SugarApplication::redirect('index.php?module=Administration&action=setnumprefix');
        die();
    }
}
