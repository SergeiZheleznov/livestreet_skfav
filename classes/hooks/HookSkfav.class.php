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
class PluginSkfav_HookSkfav extends Hook {

    public function RegisterHook() {
        $this->AddHook('template_menu_blog', 'insert_menu_item');
    }
    public function insert_menu_item()
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'hook_menu_blog.tpl');
    }
}
?>
