<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php 
    class Food {
      public $name;
      public $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo $this->price;
      }
    }

    $food = new Food('potato', 250);

    print_r($food);
    echo "<br/>";
    $food->show_price();
    ?>
  </p>

  <p>
    <?php 
    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height;
      }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);
    echo "<br/>";
    $animal->show_height();
    ?>
  </p>
  
</body>
</html>