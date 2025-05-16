<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos de PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
  //0x = hexadecimal / 0b = binário / 0 = octal
    // $num = 0x1A;
    // echo "O valor da variável é $num";
    /*$v = 300;
    var_dump($v);

    $num = 3e2; //3 x10(2)
    echo "O valor é $num";

    $num = (int) 3e2;//coerção
    var_dump($num);

    $casado = true;
    print "O valor para casado é $casado";*/

    //compostos = array e object
    //especiais = numm, resource, callabe, mixed

    $vet = [6, 2.5, "Julio", 3, false];
     var_dump($vet);

     class Pessoa {
      private string $nome;
     }

     $p = new Pessoa;
     var_dump($p);
  ?>
</body>
</html>