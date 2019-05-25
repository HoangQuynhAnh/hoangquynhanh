<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Result;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchResult */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kết quả';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  $_GET['mark']; ?>
<section class="content-header">
  <h1><i class=""></i> <?= Html::encode($this->title) ?></h1>
  <div class="breadcrumb">
  </div>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box" id="view">
        <div class="box-header with-border">
          <!-- Search Limit -->
          <section class="content-search">
                        <!-- <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>
                      -->
                    </section>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row" style='padding:0px; margin:0px;'>
                      <!--ND-->
                      <table class="table table-hover table-bordered">


                        <tr>
                          <th><span style="font-weight:bold">STT</span></th>
                          <th>Khoa</th>
                          <th>Giảng viên</th>
            <!-- <th>Mã giảng viên</th>
            --><th>Điểm tổng kết</th>
            <th>Đánh giá</th>
          </tr>
          <?php
          $getDTB=new Result();
          $getDTB=$getDTB->getDTB();
          $i=0;
          $getmark=$_GET['mark'];
          if($getmark==1){
            foreach ($getDTB as $value) {
              if($value['DTB']>=90){
               echo '<tr>';
               $i=$i+1;
              //$i=$i+1;
               echo '<td>'.$i.'</td>';
               echo '<td>'.$value['department'].'</td>';
             // echo '<td>'.$value['teacherID'].'</td>';

               echo '<td>'.$value['teacherName'].'</td>';
               echo '<td>'.round($value['DTB']).'</td>';
               echo '<td>';
               echo'<div class="custom-control custom-checkbox">

               <label class="btn btn-danger">Xuất sắc</label>
               </div>';
           }

       //   echo '</td>';
       //   echo '<tr>'.'</tr>';
         }
       }

            elseif($getmark==2){
            foreach ($getDTB as $value) {
              if($value['DTB']<90&&$value['DTB']>=70){
               echo '<tr>';
               $i=$i+1;
              //$i=$i+1;
               echo '<td>'.$i.'</td>';
               echo '<td>'.$value['department'].'</td>';
             // echo '<td>'.$value['teacherID'].'</td>';

               echo '<td>'.$value['teacherName'].'</td>';
               echo '<td>'.round($value['DTB']).'</td>';
               echo '<td>';
               echo'<div class="custom-control custom-checkbox">

                <label class="btn btn-info">Giỏi</label>
               </div>';
           }
         }
       }
       elseif($getmark==3){
         foreach ($getDTB as $value) {
              if($value['DTB']<70&&$value['DTB']>=50){
                echo '<tr>';
               $i=$i+1;
              //$i=$i+1;
               echo '<td>'.$i.'</td>';
               echo '<td>'.$value['department'].'</td>';
             // echo '<td>'.$value['teacherID'].'</td>';

               echo '<td>'.$value['teacherName'].'</td>';
               echo '<td>'.round($value['DTB']).'</td>';
               echo '<td>';
                  echo'<div class="custom-control custom-checkbox">                      
                  <label class="btn btn-success">Khá</label>
                  </div>';
                }
       }
     }
     elseif($getmark==4){
         foreach ($getDTB as $value) {
              if($value['DTB']<50){
                echo '<tr>';
               $i=$i+1;
              //$i=$i+1;
               echo '<td>'.$i.'</td>';
               echo '<td>'.$value['department'].'</td>';
             // echo '<td>'.$value['teacherID'].'</td>';

               echo '<td>'.$value['teacherName'].'</td>';
               echo '<td>'.round($value['DTB']).'</td>';
               echo '<td>';
                  echo'<div class="custom-control custom-checkbox">                      
                  <label class="btn btn-warning">Kém</label>
                            </div>';
                }
      
     }
}
 ?>
       </table>
       <?php echo"Danh sách này tổng có: ".'<b style="color:red">'.'&nbsp'.$i.'&nbsp'.'</b>'." giảng viên"; ?>
     </div>

<!-- elseif($value['DTB']<70&&$value['DTB']>50){
            echo '<tr>';
             $i=$i+1;
            //$i=$i+1;
             echo '<td>'.$i.'</td>';
             echo '<td>'.$value['department'].'</td>';
           // echo '<td>'.$value['teacherID'].'</td>';

             echo '<td>'.$value['teacherName'].'</td>';
             echo '<td>'.round($value['DTB']).'</td>';
             echo '<td>';
           echo'<div class="custom-control custom-checkbox">

           <label class="btn btn-success">Khá</label>
           </div>';
         }
         else{
          echo '<tr>';
             $i=$i+1;
            //$i=$i+1;
             echo '<td>'.$i.'</td>';
             echo '<td>'.$value['department'].'</td>';
           // echo '<td>'.$value['teacherID'].'</td>';

             echo '<td>'.$value['teacherName'].'</td>';
             echo '<td>'.round($value['DTB']).'</td>';
             echo '<td>';
           echo'<div class="custom-control custom-checkbox">

           <label class="btn btn-warning">Kém</label>
           </div>';
         }

 -->
        