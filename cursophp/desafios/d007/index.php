<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $minimo = 1000;
    $salario = $_GET['sal'] ?? $minimo;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
      <label for="sal">Salário (R$)</label>
      <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
      <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
      $tot = intdiv($salario, $minimo);
      $dif = $salario % $minimo;

      echo "<p>Ganha $tot salários mínimos e + R\$ ".number_format($dif, 2, ", ", ".").".</p>"//separador decimal sendo , e sep. de milhar sendo .
    ?>
  </section>
</body>
</html>
<!--//  $sal = 8160;
//  $min = 1000;

//  $tot = intdiv($sal, $min);
  //$tot = (int)($sal/$min);
//  $dif = $sal % $min;

//  echo "Quem ganha $sal por mês, ganha $tot salários mínimos + $dif.";-->