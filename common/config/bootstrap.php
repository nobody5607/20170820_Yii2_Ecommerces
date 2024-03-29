<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('storage', dirname(dirname(__DIR__)) . '/storage');
Yii::setAlias('@zoomimg', dirname(dirname(__DIR__)) . '/common/lib/zoomimg');
Yii::setAlias('@storage', realpath(__DIR__.'/../../storage'));
Yii::setAlias('@themes', realpath(__DIR__.'/../../frontend/themes'));

 Yii::setAlias('@storageUrl', 'http://localhost/nut/storage');
// Url Aliases
// $baseUrl = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// $dirArr = explode('/', $baseUrl);
// $count = count($dirArr);
// $num = 2;
// for ($i = $count - 1; $i >= 0; $i--) {
//     if($num>0){
// 	unset($dirArr[$i]);
// 	$num--;
//     }
// }
// Yii::setAlias('rootUrl', implode('/', $dirArr));
// //Yii::setAlias('storageUrl', implode('/', $dirArr).'/storage');
