<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "major".
 *
 * @property int $ID
 * @property string $major
 *
 * @property Studentmajors[] $studentmajors
 */
class Major extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'major';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['major'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'major' => 'Major',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentmajors()
    {
        return $this->hasMany(Studentmajors::className(), ['majorID' => 'ID']);
    }
}
