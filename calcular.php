<?php
    $nome = $_POST['nome'];
    $lanche = $_POST['lanche'];
    $qtdl = $_POST['qtdl'];
    $bebida = $_POST['bebida'];
    $qtdb = $_POST['qtdb'];

    $total = 0;
    $totalb = 0;

    switch($lanche)
    {
        case "1":
            $total += 6;
            break;
        case "2":
            $total += 8;
            break;
        case "3":
            $total += 10;
            break;
        case "4":
            $total += 12;
            break;
        case "5":
            $total += 15;
            break;
    }

    if ($qtdl >= 1)
    {
        $total = $total * $qtdl;
    }
    else
    {
        $total = $total;
    }

    switch($bebida)
    {
        case "1":
            $totalb += 2;
            break;
        case "2":
            $totalb += 5;
            break;
        case "3":
            $totalb += 3;
            break;
        case "4":
            $totalb += 5;
            break;
        case "5":
            $totalb += 8;
            break;
    }

    if ($qtdb >= 1)
    {
        $total = $total + ($totalb * $qtdb);
    }
    else
    {
        $total = $total;
    }

    echo "Olá ".$nome.", o valor gasto foi de R$".$total;
?>
