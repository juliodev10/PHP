<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!--
Ordem de precedência
** Potência
* / %
+ -
-->

<!--
abs() //valor absoluto
base_convert() conversão de base
-->
<?php 
  $r = abs(-2000);
  print("A reposta é $r <br>");
  $a = base_convert(254, 10, 6);//da base 2 pa base 10
  print("A resposta é $a <br>");
  $b = 5%2;
  print("A resposta é $b <br>");
  $c = intdiv(5,12);
  print("A resposta é $c <br>");
  $d = min(5, 2);
  print("A resposta é $d <br>");
  $e = max(5, 6, 8, 10);
  print("$e<br>");
  $f = pi();
  print("A resposta é $f <br>");
  $g = M_PI;//constante PI
  print("E $g <br>");
  $h = sqrt(81);
  print("A resposta $h");//raiz quadrada
  $i = 81 ** (1/2);
  print("A resposta é $i<br>");//raiz tmbm
  $j = 27 ** (1/3);
  print("a raiz cúbica $j");


?>
</body>
</html>