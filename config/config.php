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
$config = array();
$config['block_count'] = 5; // Колличество топиков в блоке
$config['show_block'] = true;


Config::Set('router.page.favourite_top', 'PluginSkfav_ActionSkfav');


if ($config['show_block'])
Config::Set('block.rule_skfav', array(
	'action'  => array(
			'index', 'blog' => array('{topics}','{topic}','{blog}')
		),
	'blocks'  => array(
			'right' => array('Skfav'=>array(
				'priority'=>70,
				'params' => array('plugin' => 'skfav'),
				),
			),

		),
	'clear' => false,
));

return $config;
