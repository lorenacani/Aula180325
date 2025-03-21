<?php
    $nome = $_POST['nome'];
    $petisco = $_POST['petisco'];
    $qtdp = $_POST['qtdp'];
    $ração = $_POST['ração'];
    $qtdr = $_POST['qtdr'];
    $pgm = $_POST['pgm'];
    $parcelas = $_POST['parcelas'];

    $total = 0;//calculo
    $total2 = 0; 
    $totalp = 0;
    $totalr = 0;

    switch($petisco)
    {
        case "1":
            $total += 16;
            break;
        case "2":
            $total += 18;
            break;
        case "3":
            $total += 8;
            break;
        case "4":
            $total += 9;
            break;
        case "5":
            $total += 4;
            break;
    }

    if ($qtdp >= 1)
    {
        $total = $total * $qtdp;
    }
    else
    {
        $total = $total;
    } 


    switch($ração)
    {
        case "1":
            $totalr += 29;
            break;
        case "2":
            $totalr += 34;
            break;
        case "3":
            $totalr += 32;
            break;
        case "4":
            $totalr += 28;
            break;
        case "5":
            $totalr += 54;
            break;
    }
   

    if ($qtdr >= 1)
    {
        $total = $total + ($totalr * $qtdr);
    }
    else
    {
        $total = $total;
    }


       
    $total2 = $total;
 switch ($pgm) 
    {
        case "1":
            $total2  = $total; //* 0.9// 
            break;

        case "2":
           if ($parcelas <= 3)
           {
            $total2 = $total;
           }
           else if ($parcelas >= 4 && $parcelas <= 6)
           {
            $total2 =$total* 0.9;
           }
           else if($parcelas > 6)
           {
            $total2 = $total * 1.2;
           }

            break;
    }
    echo "Olá ".$nome.", o valor gasto foi de R$".$total2;
?> 
