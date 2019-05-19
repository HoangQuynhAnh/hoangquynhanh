<?php

namespace frontend\models;

use yii\data\SqlDataProvider;
use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $semesterID
 * @property string $offercode
 *
 * @property Classes[] $classes
 * @property Subjects $offercode0
 * @property Semester $semester
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
      return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
      return [
        [['semesterID', 'offercode'], 'required'],
        [['semesterID'], 'integer'],
        [['offercode', 'subjectname'], 'string', 'max' => 11],
        [['offercode'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['offercode' => 'offercode']],
        [['semesterID'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['semesterID' => 'ID']],
      ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
      return [
        'id' => 'ID',
        'semesterID' => 'Semester I D',
        'offercode' => 'Mã môn học',
      ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
      return $this->hasMany(Classes::className(), ['scheduleID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffercode0()
    {
      return $this->hasOne(Subjects::className(), ['offercode' => 'offercode']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
      return $this->hasOne(Semester::className(), ['ID' => 'semesterID']);
    }
  public function getGiaTri1(){
     $student_id = Yii::$app->user->identity->id;
  $get = Yii::$app->db->createCommand('select (@cnt := @cnt + 1) AS "#", subjects.offercode, subjects.subjectname, teacher.teacherName, attendance.id
      from attendance
      join classes on attendance.classID = classes.id
      join teacher on teacher.teacherID = classes.teacherID
      join schedule on schedule.id = classes.scheduleID
      join subjects on subjects.offercode = schedule.offercode
      join semester on semester.ID = schedule.semesterID
      cross join (select @cnt := 0) as dummy
      where attendance.studentID = ' . $student_id . '
      and semester.ID = (select max(id) from semester)')->queryAll();
    return $get;
   }
//        $data = Schedule::find()->where(['offercode' => 'COMP '])->with('Schedule.Subjects')->one();
  //  return $data;
}
