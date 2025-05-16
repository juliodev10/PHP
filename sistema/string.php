<?php

$nome = 'João';
$sobrenome = 'Silva';

//Impressão das duas variáveis
echo $nome,$sobrenome;

$nome = 'João';
$sobrenome = 'Silva';

//Erro ao executar
//print ($nome,$sobrenome);

//Comandos válidos
print ($nome);
print "($sobrenome)<br>";

$nome = 'PHP';

echo 'Minha linguagem favorita é $nome';

$nome = 'PHP';

//Será impressa string
echo <<<ABC
Minha linguagem favorita é $nome //o valor da variável será impresso
ABC;

$nome = 'PHP';

//Será impressa a string definida
echo <<<'ABC'
echo Minha linguagem favorita é o $nome ;//o valor da variável não será impresso<br>
ABC;

$nome = 'PHP';

echo "$nome é a minha linguagem favorita <br>";

$nome = 'PHP';
echo "${nome} é a minha linguagem favorita <br>";

$nome = 'PHP';
//Acesso ao primeiro caractere da variável nome
$primeiro_caractere = $nome[0];

//Modificação da variável nome
$nome[1] = 'P';
echo "$nome <br>";

$nome = 'Linguagem PHP';
$nome_2 = ' Linguagem Java ';

//será impressa a quantidade de caracteres da string (13)
echo strlen($nome);

//Converte o primeiro caractere de cada palavra para maiúsculo
echo ucwords($nome);

//Converte o primeiro caractere para maiúsculo
echo ucfirst($nome);

//Converte a string para minúscula
echo strtolower($nome);

//Converte a string para maiúscula
echo strtoupper($nome);

//Substitui a string Linguagem pela string Amo
echo str_replace('Linguagem', 'Amo', $nome);

//Insere na primeira posição da string os caracteres PHP
echo substr_replace($nome, 'PHP', 0, 0);

//Será retornada parte da string
echo substr($nome, 1, 6);

//Retira o espaço no início e no final de uma string
echo trim($nome_2);

echo substr_replace("CARRO", "CASA", -1);

$var = 15;

//O valor de $var é convertido para string
$var_2 = (string)$var;
//-----------------------------------------------
$var = 15;

$var = true;
$var_2 = false;

//O valor de $var é convertido para string
$var_3 = strval($var);

//O valor de $var_2 é convertido para string
$var_3 = strval($var_2);
//--------------------------------------------------
$var = 1.5;

//O valor de $var é convertido para string(ponto flutuante)
$var_2 = (string)$var;

?>