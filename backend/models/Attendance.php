<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int $id
 * @property int $studentID
 * @property int $classID
 * @property string $name
 *
 * @property User $student
 * @property Classes $class
 * @property Evalutionform $evalutionform
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentID', 'classID'], 'required'],
            [['studentID', 'classID'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['studentID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['studentID' => 'id']],
            [['classID'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::className(), 'targetAttribute' => ['classID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã lớp sinh viên',
            'studentID' => 'ID sinh viên',
            'classID' => 'Mã lớp giảng viên',
            'name' => 'Tên lớp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(User::className(), ['id' => 'studentID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['id' => 'classID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvalutionform()
    {
        return $this->hasOne(Evalutionform::className(), ['attendanceID' => 'id']);
    }
}
