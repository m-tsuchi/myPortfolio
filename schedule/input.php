<!-- header -->
<?php
require 'header.php';
?>

<div class="cont01">

<!-- 左側 ----- -->
<div class="cont_L">
	<h1>schedule</h1>
</div> <!-- div.cont_L -->

<!-- 右側 ----- -->
 <div class="cont_R">
 <form action="output.php" method="post">
	<!-- 日付 -->
	<div class="item01">
		<h2>日付</h2>
		<input type="date" name="text01">
	</div> 	<!-- /div.item01 -->

	<!-- カテゴリー -->
<div class="item02">
<h2>カテゴリー</h2>
 <select name="text02">
  <option selected>選択してください</option>
  <option>就職活動</option>
  <option>訓練</option>
  <option>プライベート</option>
 </select>
</div> 	<!-- /div.item02 -->

	<!-- 内容 -->
<div class="item03">
<h2>内容</h2>
  <!-- <input type="text" name="text03"> -->
  <textarea rows="5" cols="50" name="text03"></textarea>
</div> 	<!-- /div.item03 -->

	<!-- ----- Btn ----- -->
<div class="item04">
 <input type="submit" value="スケジュールを登録する">
</div> 	<!-- /div.item04 -->

</form>
 </div>   <!-- /div.cont_R -->
</div>  <!-- /div.cont01 -->
<div class="toTop"><a href="output_all.php">一覧を表示&nbsp;<span class="triangle_R"></span></a></div>


<!-- footer -->
<?php
require 'footer.php';
?>
