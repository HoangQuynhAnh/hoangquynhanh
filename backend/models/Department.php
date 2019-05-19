<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $department
 *
 * @property Studentmajors[] $studentmajors
 * @property Teacher[] $teachers
 * @property Teacher[] $teachers0
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department'], 'required'],
            [['department'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department' => 'Khoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentmajors()
    {
        return $this->hasMany(Studentmajors::className(), ['departmentID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['departmentID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers0()
    {
        return $this->hasMany(Teacher::className(), ['departmentID' => 'id']);
    }
}
