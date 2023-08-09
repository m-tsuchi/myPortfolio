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
 <div class="cont_R outText">
 <?php

$text01=$_REQUEST['text01'];
$text02=$_REQUEST['text02'];
$text03=$_REQUEST['text03'];

// 表示する--------------
if(empty($text01)) {
    echo '<h2 class="output">日付を選んでください。</h2>';
} elseif($text02=='選択してください') {
    echo '<h2 class="output">カテゴリーを選んでください。</h2>';
} elseif(empty($text03)) {
    echo '<h2 class="output">内容を入力してください。</h2>';
} else {

    // 全て入力されている時
    echo '<h3>スケジュールの登録が完了しました。</h3>';
    echo '<p class="date">●日付：',htmlspecialchars($_REQUEST['text01']),'</p>';
    echo '<p>&nbsp;&nbsp;カテゴリー：',htmlspecialchars($_REQUEST['text02']),'</p>';
    echo '<p>&nbsp;&nbsp;内容：',htmlspecialchars($_REQUEST['text03']),'</p>';

    $pdo=new PDO('mysql:host=localhost;dbname=xs378190_schedule;charset=utf8', 'xs378190_cca2', 'ccaschedule');
    $sql=$pdo->prepare('insert into register value(null,?,?,?)');

    $sql->execute([$_REQUEST['text01'],$_REQUEST['text02'],$_REQUEST['text03']]);
} //if
// 表示する ここまで--------------

?>
 </div>   <!-- /div.cont_R -->
</div>  <!-- /div.cont01 -->

<?php

//一覧を表示 ここから---------------------
// $pdo=new PDO('mysql:host=localhost;dbname=schedule;charset=utf8', 'staff', 'password');
// $sql=$pdo->prepare('insert into register value(null,?,?,?)');

// $sql->execute([$_REQUEST['text01'],$_REQUEST['text02'],$_REQUEST['text03']])
?>

<?php
// 一覧を表示
require 'output_all.php';
?>

<!-- footer -->
<?php
require 'footer.php';
?>