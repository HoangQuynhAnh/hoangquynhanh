<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Result".
 *
 * @property string $offercode
 * @property int $teacherID
 * @property int $score
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['offercode'], 'required'],
            [['teacherID', 'score'], 'integer'],
            [['offercode'], 'string', 'max' => 11],
            [['teacherID'], 'exist', 'skipOnError' => true, 'targetClass' => Evalutionform::className(), 'targetAttribute' => ['teacherID' => 'teacherID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'offercode' => 'Offercode',
            'teacherID' => 'Teacher I D',
            'score' => 'Score',
        ];
    }
}
