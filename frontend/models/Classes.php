<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property int $id
 * @property int $scheduleID
 * @property int $teacherID
 *
 * @property Attendance[] $attendances
 * @property Schedule $schedule
 * @property Teacher $teacher
 * @property Result $result
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['scheduleID', 'teacherID'], 'required'],
            [['scheduleID', 'teacherID'], 'integer'],
            [['scheduleID'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['scheduleID' => 'id']],
            [['teacherID'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacherID' => 'teacherID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scheduleID' => 'Schedule I D',
            'teacherID' => 'Teacher I D',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['classID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'scheduleID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['teacherID' => 'teacherID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResult()
    {
        return $this->hasOne(Result::className(), ['classID' => 'id']);
    }
}
