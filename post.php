<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
<h1>課題アンケート</h1>


<form action="write.php" method="POST">
	<p>名前: <input type="text" name="name" required></p>
	<p>EMAIL: <input type="text" name="mail" required></p>
    <p>課題実施日: <input type="date" name="date" required></p>
    
    <p>課題の理解度: 
        <select name="understand" id="" required>
            <option value="">課題の理解度を選んでね</option>
            <option value="1">1：全く理解できなかった</option>
            <option value="2">2：あまり理解できなかった</option>
            <option value="3">3：まぁまぁ理解できた</option>
            <option value="4">4：理解できた</option>
            <option value="5">5：とてもよく理解できた</option>
        </select>
    </p>
    <p>課題の難易度: 
        <label><input type="radio" name="grade" value="1" required>簡単すぎる</label>
        <label><input type="radio" name="grade" value="2" required>簡単</label>
        <label><input type="radio" name="grade" value="3" required>ちょうど良い</label>
        <label><input type="radio" name="grade" value="4" required>難しい</label>
        <label><input type="radio" name="grade" value="5" required>難しすぎる</label>
    </p>
    <p>感想: <input type="textarea" name="feeling"></p>
    <input type="submit" value="回答内容を確認">
</form>
    



</body>
</html>