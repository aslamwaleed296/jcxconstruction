<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

require_once ('include/MVC/View/SugarView.php');

class AdministrationViewSetnumprefix extends SugarView
{
    public function preDisplay()
    {
        $this->dv->tpl = 'custom/modules/Administration/tpls/setnumprefix.tpl';
    }

    public function display()
    {
        $smarty = new Sugar_Smarty();
        $smarty->display($this->dv->tpl);
    }
}

?>
