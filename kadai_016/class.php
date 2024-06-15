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
      // 定義がプライベートなので、クラス内で使用できるように「set_price」でメソッド定義
      public function set_price(int $price)
      {
        $this->price = $price;
      }
      public function show_price()
      {
        echo $this->price;
      }
      // コンストラクタ(初期化)し、代入する
      public function __construct(string $name, int $price)
      {
        $this->name  = $name;
        $this->price = $price;
      }
    }
    //インスタンス化する
    $potato = new Food('potato', 250);
    // 出力する
    print_r($potato);
    echo '<br>';
    class Animal
    {
      // 定義
      private $name;
      private $wight;
      private $height;
      // 定義がプライベートなので、クラス内で使用できるように「set_height」でメソッド定義
      public function set_height(int $height)
      {
        $this->height = $height;
      }
      // プロパティを出力する[show_height」メソッド作成
      public function show_height()
      {
        echo $this->height;
      }
      // コンストラクタ(初期化)する
      public function __construct(string $name, int $height, int $wight)
      {
        $this->name = $name;
        $this->wight = $wight;
        $this->height = $height;
      }
    }


    $dog = new Animal('dog', 60, 5000);
    print_r($dog);
    echo '<br>';

    // 個別プロパティの出力
    // set_に数値入力
    $potato->set_price(250);
    // show_で関数を呼び出す指示
    $potato->show_price();
    echo '<br>';
    // set_に数値入力
    $dog->set_height(60);
    // show_で関数を呼び出す指示
    $dog->show_height();
    echo '<br>';


    ?>
  </p>
</body>

</html>