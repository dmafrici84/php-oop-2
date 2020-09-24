<!--
  GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
  NOTE:
  area quadrato: lato * lato
  perimetro quadrato: 4 * lato
  volume cubo: lato * lato * lato
  superficie cubo: 6 * lato * lato
  N.B.: definire ogni variabile e metodo pubblico come detto in classe
-->
<body style=background-color:#1E2D3B;color:#333;>
  <?php
    class Square {
      public $side;

      public function __construct($side) {
        $this -> side = $side;
      }

      public function getPerimeter() {
        return 4 * $this -> side ;
      }

      public function getArea() {
        return $this -> side * $this -> side;
      }

      public function getStrSquare() {
        return "side: " . $this -> side . "<br>"
              . "perimeter: " . $this -> getPerimeter(). "<br>"
              . "area: " . $this -> getArea(). "<br>";
      }

      public function __toString() {
        return "Square:<br>" . $this -> getStrSquare() . "<br>";
      }
    }

    class Cube extends Square {

      public function getSurface() {
        return 6 * parent::getArea();
      }

      public function getVolume() {
        return $this -> side * parent::getArea();
      }

      public function __toString() {
        return "Cube:<br>" . $this -> getStrSquare()
              . "surface: " . $this -> getSurface(). "<br>"
              . "volume: " . $this -> getVolume(). "<br>";
      }
    }

    $square1 = new Square (5);
    $square2 = new Square (23);
    $square3 = new Square (18);

    $cube1 = new Cube (10);
    $cube2 = new Cube (36);
    $cube3 = new Cube (21);
  ?>
    <div style=width:100%;height:50%;display:flex;justify-content:center;align-items:center;>
  <?php
    echo "<div style=width:150px;height:150px;margin:50px;background-color:#fff;display:flex;justify-content:center;align-items:center;>"
          . $square1 . "</div>";
    echo "<div style=width:150px;height:150px;margin:50px;background-color:#fff;display:flex;justify-content:center;align-items:center;>"
          . $square2 . "</div>";
    echo "<div style=width:150px;height:150px;margin:50px;background-color:#fff;display:flex;justify-content:center;align-items:center;>"
          . $square3 . "</div>";
  ?>
    </div>
    <div style=width:100%;height:50%;display:flex;justify-content:center;align-items:center;>
  <?php
  echo "<div style=width:150px;height:150px;margin:50px;background-color:grey;display:flex;justify-content:center;align-items:center;>"
        . $cube1 . "</div>";
  echo "<div style=width:150px;height:150px;margin:50px;background-color:grey;display:flex;justify-content:center;align-items:center;>"
        . $cube2 . "</div>";
  echo "<div style=width:150px;height:150px;margin:50px;background-color:grey;display:flex;justify-content:center;align-items:center;>"
        . $cube3 . "</div>";
  ?>
    </div>
</body>
