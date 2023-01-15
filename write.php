<?php

    // ******************post.phpから変数として受け取る******************//
    // var_dump($_POST);
    
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $date = $_POST["date"];
    $understand = $_POST["understand"];
    $grade = $_POST["grade"];
    $feeling = $_POST["feeling"]; 

    function h($val){
        return htmlspecialchars($val, ENT_QUOTES);
    }

    // ******************理解度表示内容調整******************// 

    if($understand == 1){
        $usDisplay = "1:全く理解できなかった";
    }elseif($understand ==2){
        $usDisplay = "2：あまり理解できなかった";
    }elseif($understand ==3){
        $usDisplay = "3：まぁまぁ理解できた";
    }elseif($understand ==4){
        $usDisplay = "4：理解できた";
    }elseif($understand ==5){
        $usDisplay = "5：とてもよく理解できた";
    }else{
        $usDisplay = "未選択";
    }

    // ******************難易度表示内容調整******************//

    if($grade == 1){
        $grDisplay = "1:簡単すぎる";
    }elseif($grade ==2){
        $grDisplay = "2：簡単";
    }elseif($grade ==3){
        $grDisplay = "3：ちょうど良い";
    }elseif($grade ==4){
        $grDisplay = "4：難しい";
    }elseif($grade ==5){
        $grDisplay = "5：難しすぎる";
    }else{
        $grDisplay = "未選択";
    }

    // ******************SESSION変数に代入******************//
    
    session_start();

    $_SESSION["name"] = $name;
    $_SESSION["mail"] = $mail;
    $_SESSION["date"] = $date;
    $_SESSION["understand"] = $understand;
    $_SESSION["grade"] = $grade;
    $_SESSION["feeling"] = $feeling;
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認</title>
</head>
<body>
    <h1>課題アンケート</h1>

    <p>名前：<?= h($name)?></p>
    <p>EMAIL：<?= h($mail)?></p>
    <p>課題実施日：<?= h($date)?></p>
    <p>理解度：<?= $usDisplay?></p>
    <p>難易度：<?= $grDisplay?></p>
    <p>感想：<?= h($feeling)?></p>

    <button><a href="post.php">修正</a></button>
    <form action="registar.php" method="POST">
        <button type="submit" name="add">登録</button>
    </form>




</body>
</html>