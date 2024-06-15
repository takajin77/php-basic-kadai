<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>16章課題</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      // 定義
      private $name;
      private $price;
      // プロパティ出力するためのメソッド
      public function show_price(int $price)
      {
        $this->price = $price;
        echo $price;
      }
      // コンストラクタ(初期化)し、代入する
      public function __construct(string $name, int $price)
      {
        $this->name  = $name;
        $this->price = $price;
      }
    }

    class Animal
    {
      // 定義
      private $name;
      private $wight;
      private $height;
      // プロパティを出力する[show_height」メソッド作成
      public function show_height(int $height)
      {
        $this->height = $height;
        echo $height;
      }
      // コンストラクタする
      public function __construct(string $name, int $height, int $wight)
      {
        $this->name = $name;
        $this->wight = $wight;
        $this->height = $height;
      }
    }

    // 出力
    $potato = new Food('potato', 250);
    print_r($potato);
    echo '<br>';

    $dog = new Animal('dog', 60, 5000);
    print_r($dog);
    echo '<br>';

    // 個別プロパティの出力
    $potato->show_price(250);
    echo '<br>';
    $dog->show_height(60);
    echo '<br>';


    ?>
  </p>
</body>

</html>