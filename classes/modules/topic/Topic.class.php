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
class PluginSkfav_ModuleTopic extends PluginSkfav_Inherit_ModuleTopic {
	public function GetSkfavTopics($iPage,$iPerPage,$bAddAccessible=true) {
		$aFilter = array(
			'blog_type' => array(
				'personal',
				'open'
			),
			'order' => 't.topic_count_favourite desc',
			'topic_publish' => 1,
			'topic_count_favourite' => 30,
		);

		if($this->oUserCurrent && $bAddAccessible) {
			$aOpenBlogs = $this->Blog_GetAccessibleBlogsByUser($this->oUserCurrent);
			if(count($aOpenBlogs)) $aFilter['blog_type']['close'] = $aOpenBlogs;
		}

		return $this->GetTopicsByFilter($aFilter,$iPage,$iPerPage);
	}
}
?>