<!-- header -->
<?php
require 'header.php';
?>

<div class="outputAllCont">
    

<div class="toTop">
<a href="input.php">入力ページに戻る&nbsp;<span class="triangle_R"></span></a>
</div>
<?php

//一覧を表示 ここから---------------------
$pdo=new PDO('mysql:host=localhost;dbname=xs378190_schedule;charset=utf8', 'xs378190_cca2', 'ccaschedule');
$sql=$pdo->prepare('insert into register value(null,?,?,?)');


echo '<p class="title">登録スケジュール一覧</p>';

$sql=$pdo->query('select * from register');

foreach($sql as $row) {

    echo $row['text01'],'&nbsp;',$row['text02'],'&nbsp;',htmlspecialchars($row['text03']),'&nbsp;<hr>';
}



//一覧を表示 ここまで---------------------
?>
<br>
<div class="toTop02">
<a href="#"><span class="triangle_T"></span></a>
</div>

</div>
<!-- outputAllCont -->

<!-- footer -->
<?php
require 'footer.php';
?>