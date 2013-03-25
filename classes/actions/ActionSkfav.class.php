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
class PluginSkfav_ActionSkfav extends ActionPlugin {
    public function Init() {
    }

    protected function RegisterEvent() {
        $this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i','EventSkfav');
    }

    protected function EventSkfav() {
        $this->Viewer_SetHtmlRssAlternate(Router::GetPath('rss').'favourite_top/',Config::Get('view.name'));
        $iPage=$this->GetEventMatch(2) ? $this->GetEventMatch(2) : 1;
        $aResult=$this->Topic_GetSkfavTopics($iPage,Config::Get('module.topic.per_page'));
        $aTopics=$aResult['collection'];
        $this->Hook_Run('topics_list_show',array('aTopics'=>$aTopics));
        $aPaging=$this->Viewer_MakePaging($aResult['count'],$iPage,Config::Get('module.topic.per_page'),Config::Get('pagination.pages.count'),Router::GetPath('favourite_top'));
        $this->Viewer_Assign('aTopics',$aTopics);
        $this->Viewer_Assign('aPaging',$aPaging);
        $this->Viewer_Assign('sMenuHeadItemSelect','blog');
        $this->Viewer_Assign('sMenuItemSelect','skfav');
        $this->SetTemplateAction('index');
    }

    public function EventShutdown() {

    }
}
?>
