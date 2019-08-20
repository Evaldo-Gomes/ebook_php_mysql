
<?php

function greetin()
{
    $hora_atual = date('H', time());

    if (($hora_atual >= 0) && ($hora_atual <= 11)) {
        echo 'Bom dia!';
    } else if (($hora_atual >= 12) && ($hora_atual <= 17)) {
        echo 'Bom tarde!';
    } else {
        echo 'Boa noite!';
    }
}

?>

<html>
<head>
<body>
    <title>Dia <?php echo date('d'); ?></title>
    </head>
    <body>
        <h1><font color='red'><?php greetin(); ?></font></h1>
        <p>
            Agora são <?php echo date('H'); ?> horas e <?php echo date('i'); ?> minutos.
        </p>
    </body>
</html>