<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 連想配列に値を代入する
    $personal_date = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

    // 連想配列の値を出力する
    print_r($personal_date);

    // 改行する
    echo '<br>';

    // 'age'というキーの値を更新する
    $personal_date['age'] = 37;

    // 新しく要素（キーと値）を追加する
    $personal_date['address'] = '東京都';

    // 連想配列の値を出力する
    print_r($personal_date);

    // 改行する
    echo '<br>';

    // 'gender'というキーを出力する
    echo $personal_date['gender'];
    ?>
  </p>
</body>

</html>
