<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
</head>
<body>
    <h1>teste de tipos</h1>
    <?php 
        $num = 0x1A;
        // 0x indica que o número é hexadecimal
        // 0b indica que o número é binário
        // 0 indica que o número é octal
        echo "o valor da variavel é $num <br>";

        $v = 300;
        var_dump($v);
        // var_dump é uma função que exibe informações sobre uma variável, como o tipo e o valor


        $num = 3e2; // 3 x 10^2
        echo "o valor da variavel é $num <br>";
        // sempre que o número tiver um "e" ou "E", ele será interpretado como um número em notação científica, ou seja, um número multiplicado por uma potência de 10 e sera do tipo float

        // a menos que o número seja muito grande, como 1e1000, que é um número tão grande que não pode ser representado como um float, e nesse caso ele será interpretado como INF (infinito) ex:
        $num = 1e1000;
        echo "o valor da variavel é $num <br>";

        //utilizando coerção de tipos, o PHP tenta converter um tipo de dado para outro tipo de dado, quando necessário. Por exemplo, se você tentar somar um número inteiro com uma string, o PHP irá tentar converter a string para um número inteiro antes de realizar a operação. Ex:
        $num1 = (integer) 3e2;
        var_dump($num1);

        //vetores em PHP são criados utilizando a função array() ou utilizando a sintaxe de colchetes []. Ex:
        $vetor = array(1, 2, 3);
        $vetor2 = [4, 5, 6];
        var_dump($vetor);
        var_dump($vetor2);



    
    ?>
</body>
</html>