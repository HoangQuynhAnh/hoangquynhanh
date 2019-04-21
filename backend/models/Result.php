<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $classID
 * @property int $score
 *
 * @property Classes $class
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classID', 'score'], 'required'],
            [['classID', 'score'], 'integer'],
            [['classID'], 'unique'],
            [['classID'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::className(), 'targetAttribute' => ['classID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classID' => 'Class I D',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['id' => 'classID']);
    }
}
