<?php
/*-------------------------------------------------------
*
*   Plugin "Skfav. Коллективное избранное"
*   Author: Zheleznov Sergey (skif)
*   Site: livestreet.ru/profile/skif/
*   Contact e-mail: sksdes@gmail.com
*
---------------------------------------------------------
*/

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginSkfav extends Plugin {
    public $aDelegates = array(
    );

    protected $aInherits=array(
        'module' => array('ModuleTopic'),
    );

    public function Activate() {
        return true;
    }

    public function Deactivate(){
        return true;
    }
    
    public function Init() {
    }
}
?>
