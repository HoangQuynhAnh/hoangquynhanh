<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $classID
 * @property int $score
 *
 * @property Classes $class
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classID', 'score'], 'required'],
            [['classID', 'score'], 'integer'],
            [['classID'], 'unique'],
            [['classID'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::className(), 'targetAttribute' => ['classID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classID' => 'Class I D',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['id' => 'classID']);
    }
    public function getDTB(){
        $getDTB=Yii::$app->db->createCommand('
            select (@cnt := @cnt + 1) AS "#",classID,classes.name, AVG(score)as DTB, teacherName, department
            from evalutionform, attendance,teacher,department,classes
            where evalutionform.attendanceID=attendance.id
            and teacher.teacherID = classes.teacherID
            and attendance.classID = classes.id
            and department.id=teacher.departmentID
            group by classID')->queryAll();
        return $getDTB;
    }
    public function getTeacher(){
        $getDTB=Yii::$app->db->createCommand('
            select (@cnt := @cnt + 1) AS "#", AVG(score)as DTB, teacherName, department,classes.teacherID
from evalutionform, attendance,teacher,department,classes
where evalutionform.attendanceID=attendance.id
and teacher.teacherID = classes.teacherID
and attendance.classID = classes.id
and department.id=teacher.departmentID
group by classes.teacherID')->queryAll();
        return $getDTB;
    }

}
