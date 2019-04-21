<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "evalutionform".
 *
 * @property int $attendanceID
 * @property int $score
 * @property string $date
 * @property string $comment
 *
 * @property Attendance $attendance
 */
class Evalutionform extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evalutionform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attendanceID', 'score', 'date'], 'required'],
            [['attendanceID', 'score'], 'integer'],
            [['date'], 'safe'],
            [['comment'], 'string'],
            [['attendanceID'], 'unique'],
            [['attendanceID'], 'exist', 'skipOnError' => true, 'targetClass' => Attendance::className(), 'targetAttribute' => ['attendanceID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'attendanceID' => 'Attendance I D',
            'score' => 'Score',
            'date' => 'Date',
            'comment' => 'Comment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendance()
    {
        return $this->hasOne(Attendance::className(), ['id' => 'attendanceID']);
    }
}
