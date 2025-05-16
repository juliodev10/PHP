<?php
  $total = 2_000_000;
  $sobra = $total;
  //total de semanas
  $semana =(int)($sobra / 604_800);
  $sobra = $sobra % 604_800;
  //total de dias
  $dia = (int)($sobra / 86_400);
  $sobra = $sobra % 86_400;
  //total de horas
  $hora = (int)($sobra /3_600);
  $sobra =$sobra % 3_600;
  //total de minutos
  $minuto = (int)($sobra / 60);
  $sobra = $sobra %60;
  //total de segundos
  $segundo = $sobra;
  echo "$total segundos equivalem a $semana semanas, $dia dias, $hora horas, $minuto minutos $segundo segundos.";
