<?php
function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {

        $dia_atual = date('d', time());

        if (isset($semana[$i])) {
            
            if (($dia_atual) == ($semana[$i])) {
                echo "<td><b><font color='red'>$semana[$i]</font></b></td>";
            } else {
                echo "<td>$semana[$i]</td>";
            }
        } else {
            echo "";
        }
    }
    echo "</tr>";
}

function calendario()
{
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);

        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
    linha($semana);
}
?>

<table border="1">
    <tr>
        <th><font color='red'>Dom</font></i></th>
        <th>Seg</th>
        <th>ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php calendario(); ?>
</table>

//Falta deixar os domingos em vermelho e os sábados em negrito