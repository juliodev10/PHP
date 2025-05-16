<?php

function saudacao(): string 
{
  echo $hora = date("H");

  if($hora >= 0 AND $hora <= 5) {
    $saudacao = "boa madrugada";
  }
  elseif($hora >= 6 AND $hora <= 12){
    $saudacao = "bom dia";
  }
  elseif($hora >= 13 AND $hora <= 18){
    $saudacao = "boa tarde";
  }
  else {
    $saudacao = "boa noite";
  }
  
  return $saudacao;
}
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
  
  $textoLimpo = trim($texto);
  if(mb_strlen($textoLimpo) <= $limite) {
    return $textoLimpo;
  }

  $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

  return $resumirTexto.$continue;
}
