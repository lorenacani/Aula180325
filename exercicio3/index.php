<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <fieldset>
        <legend>Loja para Pets</legend>
        <form method="post" action="calcular.php">  
            Insira o seu nome:
            <input type="text" name="nome" size="25">
            <br> <br>
            PETISCOS
            <br>
            1 – Petisco Dreamies  (R$16,00) <br>
            2 – Petisco Creamy (R$18,00) <br>
            3 – Petisco Friskies (R$8,00) <br>
            4 – Petisco P. Cookie  (R$9,00) <br>
            5 – Petisco Magnus (R$4,00) <br>
            <br>
            Insira qual petisco você deseja:
            <input type="text" name="petisco" size="25">
            <br>
            Insira o número de petiscos que você deseja:
            <input type="text" name="qtdp" size="25">
            <br> <br>
            RAÇÕES
            <br>
            1 – Ração PremieR (R$29,00) <br>
            2 – Ração GranPlus (R$34,00) <br>
            3 – Ração Golden (R$32,00) <br>
            4 – Ração Pedigree (R$28,00) <br>
            5 – Ração RoyalCanin(R$54,00) <br>  
            <br>
            Insira qual ração você deseja:
            <input type="text" name="ração" size="25">
            <br>
            Insira a quantidade que você deseja:
            <input type="text" name="qtdr" size="25">
            <br>
            <br>

            ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
            <br>
            Escolha a forma de pagamento:
            <br>
            <select name="pgm" id="pgm">
            <br> 
            <option value="1"> 
                 1 - À vista  
             <br>
            <br>             

            <option value="2">            
                2 - A prazo: 
             <br>  
            <br>
            </select>

            <br>
            <br>
            Escolha a quantidade de parcelas desejadas:
            <input type="text" name="parcelas" min="1" size="30">
            <br>


            <br>
            • Até 3 parcelas: Sem juros.
            <br>
            • De 4 a 6 parcelas: 10% de juros.
            <br>
            • Acima de 6 parcelas: 20% de juros.
            <br>
            <input type="submit" name="calcularTotal" value="Calcular Total">            
            <!-- <input type="text" name="ração" size="25">            -->
            <br>



        </form>
    </fieldset>
</body>

</html>