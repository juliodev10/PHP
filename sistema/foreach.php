<?php

/*foreach ($funcionarios as $i => $funcionario){
if ($funcionario['id'] == 22{
$busca = $funcionario;}}

foreach ($funcionarios as $i => $funcionario){
  if ($funcionario['id'] == 22{
  $busca = $funcionario;
  break;}}
  O comando break nos permite encerrar a execução do loop em um momento específico. Nesse caso é exatamente o que desejamos!

  Ok, e se quiséssemos coletar todos os demais itens, exceto o de id 22?
foreach ($funcionarios as $i => $funcionario){
if ($funcionario['id'] == 22{
continue;
$busca = $funcionario;}}
Para termos maior controle sobre estruturas de repetição também contamos com continue, que pula a execução atual, passando para próxima
*/

/*$i = 0;
while ($i++ < 3) {
    echo "3\n";
    while (1) {
        echo "2\n";
        while (1) {
            echo "1\n";
            continue 3;
        }
        echo "Essa linha nunca vai ser exibida\n";
    }
    echo "Nem essa linha\n";
}*/

/*$i = 0;
while ($i++ < 4) {
    switch ($i) {
         case 1:
               echo $i . "a\n";
               continue;
               echo $i . "b\n";
         case 2:
               echo $i . "c\n";
               continue 2;
               echo $i . "d\n";
         case 3:
               echo $i . "e\n";
               break;
               echo $i . "f\n";
         case 4:
               echo $i . "g\n";
               break 2;
               echo $i . "h\n";
   }
   echo "X\n";
}*/

/*$funcionarios = array(
    array('id' => 1, 'nome' => 'João', 'salario' => 5000),
    array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
    array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
    );
  
  foreach ($funcionarios as $i => $funcionario) {
    if ($funcionario['id'] == 22) {
          $busca = $funcionario;
          break;
    }
  }
  
  if (isset($busca)) {
    echo "Funcionário encontrado: {$busca['nome']} - {$busca['id']}";
  } else {
    echo "Funcionário não encontrado";
  }*/

  $funcionarios = array(
    array('id' => 1, 'nome' => 'João', 'salario' => 5000),
    array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
    array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
    );
  
  foreach ($funcionarios as $i => $funcionario) {
    if ($funcionario['salario'] >= 5000) {
          continue;
    }
  
    $funcionarios[$i]['salario'] = $funcionario['salario'] + ($funcionario['salario'] * 0.1);
  }
  
  foreach ($funcionarios as $funcionario) {
    echo $funcionario["nome"]." $".$funcionario["salario"]."\n";
  }

?>