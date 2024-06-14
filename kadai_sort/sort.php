<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php基礎</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order)
    {
      if ($order === TRUE) {
        echo '昇順にソートします。' . '<br>';
        sort($array);
        foreach ($array as $key => $value) {
          echo $value . '<br>';
        }
      } else {
        echo '降順にソートします。' . '<br>';
        rsort($array);
        foreach ($array as $key => $value) {
          echo  $value . '<br>';
        }
      }
    }

    $nums = [15, 4, 18, 23, 10];
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
  </p>
</body>

</html>