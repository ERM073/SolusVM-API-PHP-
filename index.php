<!DOCTYPE html>
<html>
<head>
    <title>APIアクション</title>
</head>
<body>
    <h1>APIアクション</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            $key = $_POST['key']; // 入力フィールドからKEYを取得
            $hash = $_POST['hash']; // 入力フィールドからHASHを取得

            // SolusVM APIへのリクエストURLを作成
            $apiUrl = 'https://SolusVM.domain.com/api/client/command.php?key=' . urlencode($key) . '&hash=' . urlencode($hash) . '&action=' . $action;

            // APIリクエストを実行
            $response = file_get_contents($apiUrl);

            // レスポンスを表示（必要に応じて処理を追加）
            echo "<p>APIレスポンス: " . $response . "</p>";
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="key">KEY：</label>
        <input type="text" name="key" id="key" required>
        <br><br>
        <label for="hash">HASH：</label>
        <input type="text" name="hash" id="hash" required>
        <br><br>
        <label for="action">アクションを選択してください：</label>
        <select name="action" id="action">
            <option value="reboot">再起動</option>
            <option value="boot">起動</option>
            <option value="status">状態</option>
            <option value="shutdown">シャットダウン</option>
            <option value="info">情報</option>
        </select>
        <br><br>
        <input type="submit" value="実行">
    </form>
</body>
</html>
