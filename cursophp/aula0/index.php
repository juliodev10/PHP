<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variável</title>
</head>
<body>
  <?php 
    $nome = "Júlio";
    $sobrenome = "Rodrigues";
    const PAIS = "Brasil";
//constante não muda e variável varia
//variaveis sempre começam com o simbolo $
//O segundo pod ser letra ou o simbolo _
//nomes especiais como $this não podem ser usados
//aceita caracteres[a-z],[A-Z],[0-9] e [_]
//aceita caracteres da tabela ASCII a partir de 128
//aceita acentos e ç
//case sensitive

  $nomeCompletoCliente = "Camel Case";
  $telefone_contato_fornecedor = "Snake Case";
  $nomecursosuperior = "";

    echo "Muito prazer, $nome $sobrenome! VOcê mora no " .PAIS ;
  ?>
</body>
</html>