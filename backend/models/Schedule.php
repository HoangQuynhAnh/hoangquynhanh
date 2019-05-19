<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $semesterID
 * @property string $offercode
 *
 * @property Classes[] $classes
 * @property Subjects $offercode0
 * @property Semester $semester
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semesterID', 'offercode'], 'required'],
            [['semesterID'], 'integer'],
            [['offercode', 'year','subjectName'], 'string', 'max' => 11],
            [['offercode'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['offercode' => 'offercode']],
            [['semesterID'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['semesterID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã lịch',
            'semesterID' => 'Mã kỳ học',
            'offercode' => 'Môn học',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['scheduleID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffercode0()
    {
        return $this->hasOne(Subjects::className(), ['offercode' => 'offercode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
        return $this->hasOne(Semester::className(), ['ID' => 'semesterID']);
    }
}
