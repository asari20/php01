<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
</head>
<body>
<h1>ご回答頂きありがとうございました。</h1>    


<?php

    // ******************SESSION変数から読み込み******************//
    session_start();

    $name = $_SESSION["name"];
    $mail = $_SESSION["mail"];
    $date = $_SESSION["date"];
    $understand = $_SESSION["understand"];
    $grade = $_SESSION["grade"];
    $feeling = $_SESSION["feeling"];

    $writeDate = date("Y/m/d H:i:s");
    
    // 配列で項目を纏めた後、"_"を区切り文字にして文字列へ変換
    $value = array($writeDate,$_SESSION["name"],$mail,$date,$understand,$grade,$feeling);
    $writeValue = implode("_",$value);


    // ******************txtファイルに書き込み******************//
    $file = fopen("./data/data.txt", "a");
    fwrite($file, $writeValue."\n");  
    fclose($file);


?>


</body>
</html>