<?php

namespace backend\models;

use Yii;
use backend\models\User;
/**
 * This is the model class for table "attendance".
 *
 * @property int $id
 * @property int $studentID
 * @property int $classID
 *
 * @property User $student
 * @property Classes $class
 * @property Evalutionform[] $evalutionforms
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
            [['studentID', 'classID', 'username'], 'integer'],
            ['name', 'string'],
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
            'id' => 'ID',
            'studentID' => 'ID sinh viên',
            'classID' => 'ID lớp',
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
    public function getEvalutionforms()
    {
        return $this->hasMany(Evalutionform::className(), ['attendanceID' => 'id']);
    }
}
