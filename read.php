<?php

// ******************txtファイルから読み込み******************//
$file = fopen("./data/data.txt","r");
$table_data ="";

// ******************最終行までループ******************//
while(!feof($file)){

    $data = fgets($file);

    // 最終行は改行のみ入っており、データ無しとなるため、if文で分岐
    if($data){

        // データを配列で保管
        $ar_data = explode("_", $data);

        // テーブル要素に組み込むため、<tr><td>タグで囲む
        $table_data .= "<tr>
            <td>".$ar_data[0]."</td>
            <td>".$ar_data[1]."</td>
            <td>".$ar_data[2]."</td>
            <td>".$ar_data[3]."</td>
            <td>".$ar_data[4]."</td>
            <td>".$ar_data[5]."</td>
            <td>".$ar_data[6]."</td>
        </tr>";
    }
}

fclose($file)

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート表示</title>
</head>
<body>
    <h1>アンケート結果</h1>
    <table border="1">
        <tr>
            <th>回答日時</th>
            <th>名前</th>
            <th>EMAIL</th>
            <th>課題実施日</th>
            <th>理解度</th>
            <th>難易度</th>
            <th>感想</th>
        </tr>
        <?= $table_data?>
        
    </table>
</body>
</html>