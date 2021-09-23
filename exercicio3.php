<?php
$json = file_get_contents('dados.json');
$dias_do_mes = json_decode($json);

$menor_faturamento = null;
$maior_faturamento = 0.0;
$media_mensal = 0.0;

$dia_do_menor_faturamento = 0;
$dia_do_maior_faturamento = 0;

$dias_ignorados = 0;
$soma_dos_valores = 0;

foreach($dias_do_mes as $item) {
    $dia = $item->dia;
    $valor = $item->valor;

    if($valor == 0.0) {
        $dias_ignorados++;
        continue;
    }

    if($valor > $maior_faturamento) {
        $maior_faturamento = $valor;
        $dia_do_maior_faturamento = $dia;
    }
    else if($valor < $menor_faturamento || $menor_faturamento == null) {
        $menor_faturamento = $valor;
        $dia_do_menor_faturamento = $dia;
    }

    $soma_dos_valores += $valor;

}

$num_dias_superiores_a_media = 0;
$media = $soma_dos_valores / (sizeof($dias_do_mes) - $dias_ignorados);

foreach($dias_do_mes as $item) {
    $valor = $item->valor;
    if($valor > $media) 
        $num_dias_superiores_a_media++;
}


echo "Dia do Maior Faturamento: " . $dia_do_maior_faturamento . "<br/>";
echo "Maior Valor: " . $maior_faturamento . "<br/><br/><hr/><br/>";

echo "Dia do Menor Faturamento: " . $dia_do_menor_faturamento . "<br/>";
echo "Menor Valor: " . $menor_faturamento . "<br/><br/><hr/><br/>";

echo "Média mensal: " . $media . "<br/>";
echo "Número de dias que teve o valor superior a media mensal: " . $num_dias_superiores_a_media . "<br/><br/><hr/>";

?>