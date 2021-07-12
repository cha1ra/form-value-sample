<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>お問い合わせフォームサンプル</title>
</head>
<body>
    <section class="container mb-6">
        <h2 class="title">フォーム送信 (PHP)</h2>
        <!-- フォーム内容の送信先は submit.php POST通信という方式でデータが送られる -->
        <form action="./submit.php" method="post" style="width: 600px">
            <p>name="subject" の値(value) を設定する</p>
            <div class="select mb-2">
                <select name="subject">
                    <option value="">得意科目を選択してください</option>
                    <option value="japanese">国語</option>
                    <option value="mathematics">数学</option>
                    <option value="english">英語</option>
                </select>
            </div>
            <p>name="comment" の値(value) を入力する</p>
            <p class="mb-2">
                <input type="text" name="comment" placeholder="意気込みをどうぞ" class="input" >
            </p>
            <p>
                <!-- 送信するボタンを押すと、PHPを通じてフォームの中身が submit.phpに送られる -->
                <input type="submit" value="送信する" class="button is-primary">
            </p>
        </form>
    </section>
    <section class="container">
        <h2 class="title">jQueryで value の中身を取得</h2>
        <p>name="programming" の値(value) を設定する</p>
        <div class="select mb-2">
            <select name="programming" class="questionare">
                <option value="">今まで学習した中でどれが一番楽しいですか？</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
            </select>
        </div>
        <p>
            <button class="questionare-button button is-primary">alertを表示</button>
        </p>
    </section>
    <script>
        $('.questionare-button').on('click', function() {
            const value = $('.questionare').val();
            alert(value + 'が好きなんですね！');
        });
    </script>
</body>
</html>