<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Calculadora muito loca</title>
    <style>
        h1 { color: white;
            background: rgb(3, 57, 122);
            font-family: cursive;
            font-size: 80px;
            text-align: center;
            text-indent: 1cm;
        }
        h2{
            color: black;
            font-family: cursive;
            font-size: 40px;
            text-align: center;
            text-indent: 1cm;
        }
        p {
            color: black;
            font-family: cursive;
            font-size: 25px;
            text-align: center;
            text-indent: 1cm;

        }
        a{
            color: blue;
            font-weight: bold;
        }
        form{
            background-size: auto;
            size: 2cm;
            text-align: center;

        }
        k {color: rgb(204, 0, 153);
           font-weight: bold;
        }
        c{color: red;
        font-weight: bold;

        }
    </style>
</head>
<body>
    <header>

        <h1  >Calculadora</h1>
        <h2> Calculadora </h2>

    </header>

    <form action="calculadora.php" method="GET">
        <input placeholder="Valor 1" type="number" name="v1">
        <input placeholder="Valor 2" type="number" name="v2">
        <br><br>
        <input type="submit" value="Calcular" name="calcular">
        <br><br>
        <input type="submit" value="Soma" name="som">
        <input type="submit" value="Subtração" name="sub">
        <input type="submit" value="Multiplicação" name="mult">
        <input type="submit" value="Divisão" name="div">
        <input type="submit" value="Resto" name="rest">
        <input type="reset" value="Zerar calculadora">
        <br><br>

    </form>
    <p>
    <?php

    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    $soma = $v1 + $v2;
    $sub = $v1 - $v2;
    $mult = $v1 * $v2;
    $div = $v1 / $v2;
    $mod = $v1 % $v2;
    

    if(isset($_GET['som'])){

        echo " $v1 + $v2 = $soma ";

    }else if(isset($_GET['sub'])){

        echo "$v1 - $v2 = $sub";

    }elseif(isset($_GET['mult'])){

        echo " $v1 x $v2 = $mult ";

    }elseif(isset($_GET['div'])){

        echo " $v1 / $v2 = $div ";

    }elseif(isset($_GET['rest'])){

        echo " o resto da divisão entre $v1 e $v2 é: $mod";

    }
    
    echo "<br><br>A <a>soma</a> entre os valores é: <k> $soma </k>";
    echo  "<br/>A <a>subtração</a> entre os valores é:<k> $sub </k>";
    echo  "<br/>A <a>multiplicação</a> entre os valores é: <k> $mult </k>";
    echo  "<br/>A <a>divisão</a> entre os valores é: <k> $div </k>";
    echo  "<br/>O <a>resto</a> da divisão é igual à: <k> $mod </k>";
    echo "<br><br> <c>A calculadora foi zerada, digite novos valores </c>";
    

    ?>
    </p>
</body>
</html>