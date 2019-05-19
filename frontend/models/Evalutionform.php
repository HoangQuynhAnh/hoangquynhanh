<?php

namespace frontend\models;

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
public function insertDB(){   
    if(isset($_GET['cid'])){
        $attendanceID=$_GET['cid'];
        $sumMarks = new evalutionform();
        $score=$sumMarks->getSumMarks();
        $time = time();
        $time= date('Ymd', $time);
        $date= $time;
        $comment=$_GET['cmt'] ;
        $sumMarks=$sumMarks->getSumMarks();
        $a=Yii::$app->db->createCommand('INSERT INTO evalutionform (attendanceID, score, date,comment)
          VALUES ( ' . $attendanceID. ', '.$score.', '.$date.',"'.$comment.'")')->execute();
        return true;
    }
    return false;
}
public function getID(){
    $id=$_GET['id'];
    return $id;
}
public function getAttendanceID()
{
    $id=$_GET['id'];
    $student_id = Yii::$app->user->identity->id;
    $getAttendanceID = Yii::$app->db->createCommand('select attendance.id,subjects.offercode, subjects.subjectname, teacher.teacherName 
        from attendance
        join classes on attendance.classID = classes.id
        join teacher on teacher.teacherID = classes.teacherID
        join schedule on schedule.id = classes.scheduleID
        join subjects on subjects.offercode = schedule.offercode
        join semester on semester.ID = schedule.semesterID
        where attendance.studentID = ' . $student_id . '
        and attendance.id=' . $id . '
        and semester.ID = (select max(id) from semester)')->queryAll();
    return $getAttendanceID;
}
public function getAttendanceID1()
{
    $student_id = Yii::$app->user->identity->id;
    $getAttendanceID = Yii::$app->db->createCommand('select attendance.id,subjects.offercode, subjects.subjectname, teacher.teacherName 
        from attendance
        join classes on attendance.classID = classes.id
        join teacher on teacher.teacherID = classes.teacherID
        join schedule on schedule.id = classes.scheduleID
        join subjects on subjects.offercode = schedule.offercode
        join semester on semester.ID = schedule.semesterID
        where attendance.studentID = ' . $student_id . ' 
        and semester.ID = (select max(id) from semester)')->queryAll();
    return $getAttendanceID;
}
public function getSumMarks(){
    $tong=0;
    if(isset($_GET['cau1'])&&isset($_GET['cau2'])&&isset($_GET['cau3'])&&isset($_GET['cau4'])&&isset($_GET['cau5'])&&isset($_GET['cau6'])&&isset($_GET['cau7'])&&isset($_GET['cau8'])&&isset($_GET['cau9'])&&isset($_GET['cau10'])&&isset($_GET['cau11'])&&isset($_GET['cau12'])&&isset($_GET['cau13'])&&isset($_GET['cau14'])&&isset($_GET['cau15'])&&isset($_GET['cau16'])){ 
        $cau1=$_GET['cau1'];$cau2=$_GET['cau2'];$cau3=$_GET['cau3'];
        $cau4=$_GET['cau4'];$cau5=$_GET['cau5'];$cau6=$_GET['cau6'];
        $cau7=$_GET['cau7'];$cau8=$_GET['cau8'];$cau9=$_GET['cau9'];
        $cau10=$_GET['cau10'];$cau11=$_GET['cau11'];$cau12=$_GET['cau12'];
        $cau13=$_GET['cau13'];$cau14=$_GET['cau14'];$cau15=$_GET['cau15'];
        $cau16=$_GET['cau16'];
        $tong=$cau1+$cau2+$cau3+$cau4+$cau5+$cau6+$cau7+$cau8+$cau9+$cau10+$cau11+$cau12+$cau13+$cau14+$cau15+$cau16;return $tong;}
    }
}
