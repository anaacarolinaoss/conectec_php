<?php
function gerarCalendario($mes, $ano) {
    // Nome dos meses
    $nomesMeses = [
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
        5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
        9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];

    // Número de dias no mês
    $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
    
    // Determinar o primeiro dia do mês
    $primeiroDia = mktime(0, 0, 0, $mes, 1, $ano);
    $diaDaSemana = date('N', $primeiroDia); // 1 (segunda-feira) a 7 (domingo)

    // Início da tabela
    echo "<table border='1'>";
    echo "<tr><th colspan='7'>" . $nomesMeses[$mes] . " " . $ano . "</th></tr>";
    echo "<tr>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
            <th>Dom</th>
          </tr>";
    
    // Preencher os espaços vazios antes do primeiro dia
    echo "<tr>";
    for ($i = 1; $i < $diaDaSemana; $i++) {
        echo "<td></td>";
    }

    // Preencher os dias do mês
    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        if (($dia + $diaDaSemana - 1) % 7 == 0) {
            echo "</tr><tr>"; // Nova linha a cada 7 dias
        }
        echo "<td>$dia</td>";
    }
    echo "</tr>";
    echo "</table>";
}

// Usar o mês e ano atuais
$mesAtual = date('n'); // Mês atual (1-12)
$anoAtual = date('Y'); // Ano atual
gerarCalendario($mesAtual, $anoAtual);
?>