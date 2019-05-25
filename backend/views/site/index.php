<?php

$host = 'http://' . $_SERVER['HTTP_HOST'];
$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl) . '/';
echo $host.$homeUrl.'index.php?r=evateacherbymark%2Fview&mark=';
?>