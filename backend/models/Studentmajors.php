<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "studentmajors".
 *
 * @property int $studentID
 * @property int $departmentID
 * @property int $majorID
 *
 * @property User $student
 * @property Department $department
 * @property Major $major
 */
class Studentmajors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentmajors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentID', 'departmentID', 'majorID'], 'required'],
            [['studentID', 'departmentID', 'majorID'], 'integer'],
            [['studentID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['studentID' => 'id']],
            [['departmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['departmentID' => 'id']],
            [['majorID'], 'exist', 'skipOnError' => true, 'targetClass' => Major::className(), 'targetAttribute' => ['majorID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentID' => 'Student I D',
            'departmentID' => 'Department I D',
            'majorID' => 'Major I D',
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
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'departmentID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMajor()
    {
        return $this->hasOne(Major::className(), ['ID' => 'majorID']);
    }
}
