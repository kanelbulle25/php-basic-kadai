<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP 課題16章</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;

           //コンストラクタを定義する
           public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
           }

           //メソッドを定義する
           public function show_price() {
            echo $this->price . '<br>';
           }
       }

       //クラスの定義2
       class Animal {
        //プロパティを定義する
        private $name;
        private $height;
        private $weight;

        //コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        //メソッドを定義する
        public function show_height() {
          echo $this->height . '<br>';
        }
       }

       // インスタンス化する
       $Food = new Food('potato', 250);
       print_r($Food);
       echo '<br>';

       $Animal = new Animal('dog', 60, 5000);
       print_r($Animal);
       echo '<br>';  


       $Food->show_price();
       $Animal->show_height();

       ?>
   </p>
</body>

</html>