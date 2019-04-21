<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property int $ID
 * @property string $year
 * @property int $semester
 *
 * @property Schedule[] $schedules
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'semester'], 'required'],
            [['semester'], 'integer'],
            [['year'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'year' => 'Year',
            'semester' => 'Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['semesterID' => 'ID']);
    }
}
