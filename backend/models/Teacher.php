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
            [['teacherName', 'departmentID'], 'required'],
            [['departmentID', 'status'], 'integer'],
            [['teacherName','avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacherID' => 'Mã giảng viên',
            'teacherName' => 'Tên giáo viên',
            'departmentID' => 'Mã khoa',
            'status' => 'Trạng thái',
            'avatar' => 'Ảnh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['teacherID' => 'teacherID']);
    }
     public function getDepartmentID()
    {
        return $this->hasMany(Department::className(), ['departmentID' => 'departmentID']);
    }
}
