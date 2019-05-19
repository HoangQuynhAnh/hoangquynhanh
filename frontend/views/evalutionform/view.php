<?php 
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use frontend\models\user;
use frontend\models\Schedule;
use frontend\models\Evalutionform;
use frontend\models\Semester;
use yii\grid\GridView;
use yii\grid\CheckboxColumn;
use frontend\models\Subjects;
use frontend\controllers;
use yii\data\SqlDataProvider;?>
<style>
.o{color:orange;}
</style>
<div style="margin-left: 15%">
	<span class="o">
		<ul style="display: -webkit-inline-box; list-style-type: none; >
		<li style="padding-right: 10%;"><i><b>1 = Cần cải thiện</b></i></li>
		<li style="padding-right: 10%;padding-left: 10%"><i><b>2 = Đạt</b></i></li>
		<li style="padding-right: 10%;"><i><b>3 = Khá</b></i></li>
		<li style="padding-right: 10%;"><i><b>4 = Tốt</b></i></li>
		<li style="padding-right: 10%;"><i><b>5 = Xuất sắc</b></i></li>
	</ul>
</span>
</div>
<div style="text-align: left">
	<?php 
	$getAttendanceID = new Evalutionform();
	$getAttendanceID = $getAttendanceID->getAttendanceID();
	foreach($getAttendanceID as $value){
		?>
		<div style="margin-bottom: 1%">Tên giảng viên: <b><?php echo $value['teacherName']; ?></b>
		<br>
		Tên học phần: <b ><?php echo $value['subjectname'];} ?></b>
		<br>
		Ngày khảo sát:
		<b>
			<?php $time = time();
			echo date('d-m-Y', $time);
			?></b>
</div>
<div>
	<form name="feedback" onsubmit="return validate()">
<table class="table table-hover table-bordered ">
	<tr>
		<th  rowspan="2" style="vertical-align:middle;"><span style="font-weight:bold">TT</span></th>
		<th  rowspan="2" style="vertical-align:middle;">Giảng viên đã thực hiện hoạt động giảng dạy như sau:</th>
		<th  colspan="5">Mức độ thực hiện</th>
	</tr>
	<tr>
		<td >1</td>
		<td >2</td>
		<td >3</td>
		<td >4</td>
		<td >5</td>
	</tr>
	<tr>
		<td >1</td>
		<td >Giới thiệu chương trình chi tiết của học phần trước khi học</td>
		<td ><input type="radio" name="cau1" value="1"></td>
		<td ><input type="radio" name="cau1" value="2"></td>
		<td ><input type="radio" name="cau1" value="3"></td>
		<td ><input type="radio" name="cau1" value="4"></td>
		<td ><input type="radio" name="cau1" value="5"></td>
	</tr>
	<tr>
		<td >2</td>
		<td class="tg-0ilg">Đến lớp và kết thúc đúng giờ</td>
		<td ><input type="radio" name="cau2" value="1"></td>
		<td ><input type="radio" name="cau2" value="2"></td>
		<td ><input type="radio" name="cau2" value="3"></td>
		<td ><input type="radio" name="cau2" value="4"></td>
		<td ><input type="radio" name="cau2" value="5"></td>
	</tr>
	<tr>
		<td >3</td>
		<td class="tg-0ilg">Sử dụng hiệu quả thời gian tiết học cho việc dạy học</td>
		<td ><input type="radio" name="cau3" value="1"></td>
		<td ><input type="radio" name="cau3" value="2"></td>
		<td ><input type="radio" name="cau3" value="3"></td>
		<td ><input type="radio" name="cau3" value="4"></td>
		<td ><input type="radio" name="cau3" value="5"></td>
	</tr>
	<tr>
		<td >4</td>
		<td class="tg-0ilg">Dạy đủ số tiết theo quy định</td>
		<td ><input type="radio" name="cau4" value="1"></td>
		<td ><input type="radio" name="cau4" value="2"></td>
		<td ><input type="radio" name="cau4" value="3"></td>
		<td ><input type="radio" name="cau4" value="4"></td>
		<td ><input type="radio" name="cau4" value="5"></td>
	</tr>
	<tr>
		<td >5</td>
		<td class="tg-0ilg">Đòi hỏi sự nghiêm túc, tập trung trong học tập của sinh viên</td>
		<td ><input type="radio" name="cau5" value="1"></td>
		<td ><input type="radio" name="cau5" value="2"></td>
		<td ><input type="radio" name="cau5" value="3"></td>
		<td ><input type="radio" name="cau5" value="4"></td>
		<td ><input type="radio" name="cau5" value="5"></td>
	</tr>
	<tr>
		<td >6</td>
		<td class="tg-0ilg">Duy trì bầu không khí học tập tích cực</td>
		<td ><input type="radio" name="cau6" value="1"></td>
		<td ><input type="radio" name="cau6" value="2"></td>
		<td ><input type="radio" name="cau6" value="3"></td>
		<td ><input type="radio" name="cau6" value="4"></td>
		<td ><input type="radio" name="cau6" value="5"></td>
	</tr>
	<tr>
		<td >7</td>
		<td class="tg-0ilg">Ngôn ngữ, tác phong chuẩn mực</td>
		<td ><input type="radio" name="cau7" value="1"></td>
		<td ><input type="radio" name="cau7" value="2"></td>
		<td ><input type="radio" name="cau7" value="3"></td>
		<td ><input type="radio" name="cau7" value="4"></td>
		<td ><input type="radio" name="cau7" value="5"></td>
	</tr>
	<tr>
		<td >8</td>
		<td class="tg-0ilg">Khuyến khích việc trao đổi, phản biện</td>
		<td ><input type="radio" name="cau8" value="1"></td>
		<td ><input type="radio" name="cau8" value="2"></td>
		<td ><input type="radio" name="cau8" value="3"></td>
		<td ><input type="radio" name="cau8" value="4"></td>
		<td ><input type="radio" name="cau8" value="5"></td>
	</tr>
	<tr>
		<td >9</td>
		<td class="tg-0ilg">Sẵn sang tư vấn, hỗ trợ sinh viên</td>
		<td ><input type="radio" name="cau9" value="1"></td>
		<td ><input type="radio" name="cau9" value="2"></td>
		<td ><input type="radio" name="cau9" value="3"></td>
		<td ><input type="radio" name="cau9" value="4"></td>
		<td ><input type="radio" name="cau9" value="5"></td>
	</tr>
	<tr>
		<td >10</td>
		<td class="tg-0ilg">Nội dung giảng dạy bám sát với chương trình và có phân tích cho sinh viên</td>
		<td ><input type="radio" name="cau10" value="1"></td>
		<td ><input type="radio" name="cau10" value="2"></td>
		<td ><input type="radio" name="cau10" value="3"></td>
		<td ><input type="radio" name="cau10" value="4"></td>
		<td ><input type="radio" name="cau10" value="5"></td>
	</tr>
	<tr>
		<td >11</td>
		<td class="tg-0ilg">Nội dung giảng dạy được liên hệ với thực tiễn</td>
		<td ><input type="radio" name="cau11" value="1"></td>
		<td ><input type="radio" name="cau11" value="2"></td>
		<td ><input type="radio" name="cau11" value="3"></td>
		<td ><input type="radio" name="cau11" value="4"></td>
		<td ><input type="radio" name="cau11" value="5"></td>
	</tr>
	<tr>
		<td >12</td>
		<td class="tg-0ilg">Phương pháp giảng dạy phù hợp với sinh viên</td>
		<td ><input type="radio" name="cau12" value="1"></td>
		<td ><input type="radio" name="cau12" value="2"></td>
		<td ><input type="radio" name="cau12" value="3"></td>
		<td ><input type="radio" name="cau12" value="4"></td>
		<td ><input type="radio" name="cau12" value="5"></td>
	</tr>
	<tr>
		<td >13</td>
		<td class="tg-0ilg">Sử dụng hiệu quả các phương tiện, công cụ, dạy học (tài liệu dạy học, phần mềm, máy chiếu,...)</td>
		<td ><input type="radio" name="cau13" value="1"></td>
		<td ><input type="radio" name="cau13" value="2"></td>
		<td ><input type="radio" name="cau13" value="3"></td>
		<td ><input type="radio" name="cau13" value="4"></td>
		<td ><input type="radio" name="cau13" value="5"></td>
	</tr>
	<tr>
		<td >14</td>
		<td class="tg-0ilg">Gợi mở cho người học tiếp tục tự học, tự nghiên cứu</td>
		<td ><input type="radio" name="cau14" value="1"></td>
		<td ><input type="radio" name="cau14" value="2"></td>
		<td ><input type="radio" name="cau14" value="3"></td>
		<td ><input type="radio" name="cau14" value="4"></td>
		<td ><input type="radio" name="cau14" value="5"></td>
	</tr>
	<tr>
		<td >15</td>
		<td class="tg-0ilg">Kiểm tra, đánh giá kết quả học tập công bằng, khách quan</td>
		<td ><input type="radio" name="cau15" value="1"></td>
		<td ><input type="radio" name="cau15" value="2"></td>
		<td ><input type="radio" name="cau15" value="3"></td>
		<td ><input type="radio" name="cau15" value="4"></td>
		<td ><input type="radio" name="cau15" value="5"></td>
	</tr>
	<tr>
		<td >16</td>
		<td class="tg-uyrh">Phản hồi kịp thời kết quả kiểm tra, đánh giá giúp người học điều chỉnh</td>
		<td ><input type="radio" name="cau16" value="1"></td>
		<td ><input type="radio" name="cau16" value="2"></td>
		<td ><input type="radio" name="cau16" value="3"></td>
		<td ><input type="radio" name="cau16" value="4"></td>
		<td ><input type="radio" name="cau16" value="5"></td>
	</tr> 
		<input type="hidden" name="cid" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}
   ?>"></tr>
</table>
</div>
<div style="display: inline-flex; padding: 2% 0% 2% 7%; width: 100%">
	Ý kiến góp ý khác: &nbsp;
	<textarea name="cmt"cols="4" style="overflow: auto; width: 60%" >
	</textarea>
</div>
<div style="text-align: center; padding-bottom: 2%"><input class= "btn btn-info" type="submit" name="submit" value="Gửi"></div>
</div>

</form>
<script type="text/javascript">
	function validate() {
		var form = document.forms["feedback"];
		var count = 0;
		for(var i = 0; i < 80; i++) {
			if (form[i].checked) count++;
		}
		console.log(count);
		if (count < 16) {
			alert("Vui lòng tích đủ số câu hỏi");
			return false;
		}
	}
</script>