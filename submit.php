<?php 
    // name="subject" の値 (value) を取得 して $subject に格納する
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
    // PHP文法に関する補足:
    // 1. PHPの世界では 変数には $XXX のように ドルマーク($) をつけて表現する
    // 2. htmlspecialchars() は、 フォームから悪意あるプログラムコードが実行されないように怪しい文字列を変換してくれるやつ

    // name="comment" の値 (value) を取得 して $comment に格納する
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>送信結果を表示</title>
</head>
<body>
    <section class="container">
        <h1 class="title">フォーム内容</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>subject</td>
                    <!-- $subjectの中身を表示 -->
                    <td><?= $subject?></td>
                </tr>
                <tr>
                    <td>comment</td>
                    <!-- $commentの中身を表示 -->
                    <td><?= $comment?></td>
                </tr>
            </tbody>

        </table>
        <a href="./index.php">index.phpに戻る</a>
    </section>
</body>
</html>