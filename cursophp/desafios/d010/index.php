<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 10</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $atual = date("Y");
    //$nasc = $_GET['nasc'] ?? '2000';
    //$ano = $_GET['ano'] ?? $atual;
    $nasc = is_numeric($_GET['nasc'] ?? null) ? (int) $_GET['nasc'] : 2000;
    $ano = is_numeric($_GET['ano'] ?? null) ? (int) $_GET['ano'] : $atual;
  ?>
   <!--$atual = date("Y");
    echo $atual;
    $nasc = 1978;
    $ano = $atual;
    $idade = $ano - $nasc;
    echo "Quem nasceu em $nasc vai ter $idade anos em $ano.";-->
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="nasc">Em que ano você nasceu?</label>
      <input type="number" name="nasc" id="nasc" min="1900" max="<?=($atual-1)?>" value="<?=$nasc?>">
      <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
      <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>
  <section>
    <?php
      $idade = $ano - $nasc;
    ?>
    <h2>Resultado</h2>
    <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
  </section>  
</body>
</html>