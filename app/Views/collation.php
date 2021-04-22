<style>
    body{
      background: linear-gradient(to right, navy, red);
      text-align: center;
      color: #fff;
      font-size: 10em;
    }
  </style>
<?php
  include "includes/pop.inc.php";
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $calc = $_POST['calc'];

  $calculator = new Cal($num1, $num2, $calc);
  echo $calculator->getCalc();
?>