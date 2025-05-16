<?php
/*for ($i=0; $i < 10; $i++) {
  echo $i."<br>";
}

for ($i = 0; $i < 10; $i++):
  echo $i."<br>";
endfor;*/ 

/* $vetor = array(1, 2, 3, 4, 5);
foreach($vetor as $item)
{
    echo $item;
}

$pararLoop = 9;

for($numero = 0; ; $numero++){
    if($numero == $pararLoop){
		break;
    }
    echo $numero."<br>";
}

for($i = 0; $i < 10; $i++){
  if($i % 2 == 0){
      continue;
  }
  echo $i."<br>";
} */

$colecao = [1, 3, 6, 9, 13];
$soma = 0;
for($i = 0, $j = count($colecao); $i < $j; $i++){
    $soma += $colecao[$i];
}
echo $soma;

/*Note que na expressão 1 do for declaramos e inicializamos duas variáveis (i e j) utilizando a vírgula para separar esses códigos. Ao executar esta implementação será impresso o resultado da soma dos números da coleção: 32.*/
?>