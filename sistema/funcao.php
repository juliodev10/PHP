<?php
  /*function soma($num_1, $num_2){

    $total = $num_1 + $num_2;
  
    return $total;
  }*/

  /*Declaração da função soma
e os parâmetros $num_1 e $num_2*/
/*function soma($num_1,$num_2){

  $total = $num_1 + $num_2;

  return $total;

}

//definido os valores para as variáveis
echo soma(5,3);*/

//Criada a referência em $num_1
function referencia(&$num_1){

  $num_1 *= 5;

  //retorno o valor de $num_1 * 5
  return $num_1;

}

$num_2 = 3;

//Execução da função
referencia($num_2);
echo $num_2;

/*Declaração da função passagem_padrao
e do parâmetro $num_1 já com seu valor definido*/
/*function passagem_padrao($num_1 = 15){

  return $num_1;  
}

//Será impresso o retorno da função - 15
echo passagem_padrao();*/ 

/*function dividir($num_1, $num_2){

  $operacao = $num_1 / $num_2;

  echo $operacao;   
}*/

function dividir($num_1, $num_2){

  $operacao = $num_1 / $num_2;

  return $operacao;

}

//Chamada da função
echo dividir(8,4);
/*

$num_1 = 15;

function exemplo($num_2){

  global $num_1;

  $operacao = $num_1 + $num_2;

  return $operacao;
}*/

?>