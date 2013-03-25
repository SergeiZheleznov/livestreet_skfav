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
class PluginSkfav_BlockSkfav extends Block {
    public function Exec() {
        $aResult=$this->Topic_GetSkfavTopics(1,Config::Get('plugin.skfav.block_count'));
        if ($aResult['count']) {
            $oTopics = $aResult['collection'];
            //$oViewer = $this->Viewer_GetLocalViewer();
            //$oViewer->Assign('oUserCurrent', $this->User_GetUserCurrent());
            //$sTextResult = $oViewer->Fetch(Plugin::GetTemplatePath('skfav') . "blocks/fav_topics.tpl");
            
            $this->Viewer_Assign('oTopics', $oTopics);
        }
    }
}
?>
