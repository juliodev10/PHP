<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <main>
    <h1>Resultado Final</h1>
    <p>
       <?php
        $n = $_GET["num"] ?? 0;
        $a = $n - 1;
        $s = $n + 1;
        echo "O número escolhido foi <strong>$n</strong>";
        echo "<br>O seu <em>antecessor</em> é $a";
        echo "<br>O seu <em>sucessor</em> é $s";
       /* $num = 15;
       $ant = $num -1;
       $suc = $num + 1;

       echo "O antecessor de $num é ".$num - 1 . "<br>";
       echo "O sucessor de $num é ".($num + 1) . "<br>";
       */
   
  ?>
    </p>
    <!--<button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>-->
    <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
  </main>

</body>
</html>