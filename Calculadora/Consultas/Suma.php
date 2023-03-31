<link rel="stylesheet" href="../estilo/estilo.css">
<?php
class Suma{
   public  $n1;
   public $n2;

   public function __construct($n1, $n2)
   {
    $this->n1 = $n1;
    $this->n2 = $n2;
   }

   public function sumar()
   {
    return $this->n1 + $this->n2;
   }

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $total = new Suma($n1, $n2);
    $resultado = $total->sumar();
echo '<h1 style="color: blue; font-size: 18px;">La suma de los dos números es: ' . $resultado . '</h1>';
echo '<li><a href="../Vistas/suma.html">Volver al formulario</a></li>';

}
?>