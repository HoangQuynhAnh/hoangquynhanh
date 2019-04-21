<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $teacherID
 * @property string $teacherName
 * @property string $major
 * @property int $departmentID
 * @property int $status
 * @property string $avatar
 *
 * @property Classes[] $classes
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacherName', 'major', 'departmentID'], 'required'],
            [['departmentID', 'status'], 'integer'],
            [['teacherName', 'major', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacherID' => 'Teacher I D',
            'teacherName' => 'Teacher Name',
            'major' => 'Major',
            'departmentID' => 'Department I D',
            'status' => 'Status',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['teacherID' => 'teacherID']);
    }
}
