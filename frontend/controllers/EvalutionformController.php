<?php

namespace frontend\controllers;
use yii\data\ActiveDataProvider;
use frontend\models\Schedule;

use yii\data\SqlDataProvider;
class EvalutionformController extends \yii\web\Controller
{
	
public function actionIndex()
{
//	$model=Schedule::findone(['slug'=>$slug]);
	//$model = Schedule()::findone(['id'=>$id]);
	return $this->render('view'//,[
	//'model'=>$model,
	//]
);
}
}
