<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property string $offercode
 * @property string $subjectname
 * @property int $status
 * @property string $description
 *
 * @property Schedule[] $schedules
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['offercode', 'subjectname'], 'required'],
            [['status'], 'integer'],
            [['offercode'], 'string', 'max' => 11],
            [['subjectname', 'description'], 'string', 'max' => 255],
            [['offercode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'offercode' => 'Offercode',
            'subjectname' => 'Subjectname',
            'status' => 'Status',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['offercode' => 'offercode']);
    }
}
