<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property int $id
 * @property int $scheduleID
 * @property int $teacherID
 * @property string $name
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
            [['scheduleID', 'teacherID', 'name'], 'required'],
            [['scheduleID', 'teacherID'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'id' => 'Mã lớp giảng viên',
            'scheduleID' => 'Mã môn theo học kỳ',
            'teacherID' => 'Teacher I D',
            'name' => 'Tên lớp ',
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
