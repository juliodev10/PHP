<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $total = $_GET['seg'] ?? 0;
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> 
      <label for="seg">Qual é o total de segundos?</label>
      <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <?php
     $sobra = $total;
     //total de semanas
     $semana =(int)($sobra / 604_800);
     $sobra = $sobra % 604_800;
     //total de dias
     $dia = (int)($sobra / 86_400);
     $sobra = $sobra % 86_400;
     //total de horas
     $hora = (int)($sobra /3_600);
     $sobra =$sobra % 3_600;
     //total de minutos
     $minuto = (int)($sobra / 60);
     $sobra = $sobra %60;
     //total de segundos
     $segundo = $sobra;
     $sobra = $total;
  ?>

  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor digitado,<strong> <?=number_format($total, 0, ",", ".")?> segundos </strong> equivalem a:</p>
    <ul>
      <li><?=$semana?> semanas</li>
      <li><?=$dia?> dias</li>
      <li><?=$hora?> horas</li>
      <li><?=$minuto?> minutos</li>
      <li><?=$segundo?> segundos</li>
    </ul>
  </section>
</body>
</html>