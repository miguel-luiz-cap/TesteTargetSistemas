<?php

$SP = 67836.43;
$RJ = 36678.66;
$MG = 29229.88;
$ES = 27165.48;
$Outros = 19849.53;

$total = $SP + $RJ + $MG + $ES + $Outros;
echo "Soma Total: " . $total . "<br/><hr/><br/>";

echo "Porcentagem correspondente a SP: " . round(($SP * 100) / $total, 2) . "%<br/>";
echo "Porcentagem correspondente a RJ: " . round(($RJ * 100) / $total, 2) . "%<br/>";
echo "Porcentagem correspondente a MG: " . round(($MG * 100) / $total, 2) . "%<br/>";
echo "Porcentagem correspondente a ES: " . round(($ES * 100) / $total, 2) . "%<br/>";
echo "Porcentagem correspondente a Outros: " . round(($Outros * 100) / $total, 2) . "%<br/>";

