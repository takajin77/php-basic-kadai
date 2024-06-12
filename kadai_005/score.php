<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php5章課題</title>
</head>

<body>
  <p>
    <?php
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計点
    $sum_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    echo '合計点は' . $sum_score . '点です。';

    echo '<br>';
    // 平均点
    $average_score = $sum_score / 10;
    echo '平均点は' . $average_score . '点です。'
    ?>
  </p>

  <p>
    <?php

    // 点数を配列化
    $score_arr = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
    echo '合計は' . array_sum($score_arr) . '点です';
    echo ('<br>');
    // 配列数のカウント
    $count = count($score_arr);
    echo '平均点は' . array_sum($score_arr) / $count . '点です';
    ?>
  </p>
</body>

</html>