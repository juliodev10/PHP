<?php
echo date("d/m/Y <br>");
// 20/06/2015

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('d-m-Y') ."<br>";
echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";
echo 'Next Week: '. date('d-m-Y', strtotime('+1 week')) ."<br>";
// Now: 04-07-2015 à Data atual
// Next Week: 11-07-2015 à Uma semana após a data atual
// Next Week: 11-07-2015 à Uma semana após a data atual utilizando strtotime

$data = mktime(02,30,00,04,30,1995);
// Mostra 30-04-1995
echo date("d-m-Y", $data)."<br>";

// Mostra 30-04-1995 02:30
echo date("d-m-Y H:i", $data)."<br>";

// Mostra 1995
echo date("Y", $data)."<br>";

/*$atual = new DateTime();
$especifica = new DateTime(' 1990-01-22');
$texto = new DateTime(' +1 month');

print_r($atual);
print_r($especifica);
print_r($texto);

$data = new DateTime();
echo $data->format('d-m-Y H:i:s <br>');
$data = new DateTime('+1 month');
echo $data->format('d-m-Y H:i:s <br>');

$data = new DateTime('22-01-1990');
$data->modify('+1 month');
echo $data->format('d-m-Y H:i:s <br>');

$data = new DateTime('22-01-1990');
$data->setDate(1995, 3, 9);
echo $data->format('d-m-Y H:i:s');*/

/*$data = '09-03-1995';
$data1 = DateTime::createFromFormat("d-m-Y", $data);
echo $data1->format("d-m-Y <br>");

$data = new DateTime('22-01-1990');
      $data->setTime(9, 15, 44);
      echo $data->format('d-m-Y H:i:s');*/

$fuso = new DateTimeZone('America/New_York');
  $data = new DateTime('22-01-1990');
  $data->setTimezone($fuso);
  echo $data->format('d-m-Y H:i:s');

  $intervalo = new DateInterval('P2Y4D');
  echo $intervalo->format('%y anos e %d dias');

  $data1 = new DateTime('2011-09-11');
  $data2 = new DateTime('2011-10-13');
  $intervalo = $data1->diff($data2);
  echo $intervalo->format('%R%a dias');
// +32 dias
//---------------------------------------------------------------
  /*Y: Anos
M: Meses
D: Dias
W: Semanas
H: Horas
M: Minutos
S: Segundos
P2D: Período de dois dias
P3M: Período de três meses
PT5S: Período de cinco segundos
P3YT8M: Período de três anos e oito minutos*/

/*$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');
var_dump($data1 == $data2);
var_dump($data1 > $data2);
var_dump($data1 < $data2);
// boolean false
// boolean false
// boolean true

$data = new DateTime('2011-09-11');
  print_r($data);

  $data->add(new DateInterval('P2M5D'));
  print_r($data);*/

  date_default_timezone_set('America/Sao_Paulo <br>');

  /*%e: Dia em número
%a: Dia abreviado
%A: Dia por extenso
%m: Mês em número
%b: Mês abreviado
%B: Mês por extenso
%y: Ano com dois dígitos
%Y: Ano com quadro dígitos*/

echo strftime("%A");

/*header('Content-type: text/html; charset=UTF-8');
echo "Última Modificação: " .date("F d Y H:i:s", getlastmod());

var_dump(checkdate(12, 31, 2000));//verifica se a data esta correta
   var_dump(checkdate(2, 29, 2001));*/

  /* $today = getdate();
    print_r($today);*/

    $data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$data = "$ano/$mes/$dia";
 echo "$data <br>" ;
 
 $timestamp = strtotime('9st March 1995');
echo idate('m', $timestamp);//mostra o mes

?>