<?php
//declare(strict_types= 1);
require_once 'sistemaa/configuracao.php'; //require 'configuracao.php';include 'configuracao.php'
include_once 'Helpers.php';

$texto = 'texto para resumir';//18 caracteres
/*echo $total = mb_strlen(trim($texto));// tira espaços
echo'<hr>';

echo $resumo = mb_substr($texto, 1, 3);
echo '<hr>';
echo $ocorrencia = mb_strrpos($texto,'x');*/

/*$int = 0;
$float = 0.5;
$bool = false;
$nulo = null;*/

//var_dump($texto);
//echo'<hr>';
//echo saudacao();
//echo'<hr>';
echo resumirTexto($texto, 15);
?>