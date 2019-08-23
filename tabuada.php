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
    </style>
</head>
<body>
    <header>

        <h1  >Calculadora</h1>
        <h2> Calculadora </h2>

    </header>

    <form action="tabuada.php" method="GET">
        Qual tabuada você quer?
        <br>
        <input placeholder="Tabuada" type="text" name="v1">
        <br><br>
        Até qual valor você quer?
        <br>
        <input placeholder="Quantidade" type="text" name="v2">
        <input type="submit" value="Calcular">
    </form>
    <p>
    <?php
    $value = $_GET['v1'];
    $qt = $_GET['v2'];

    for($g=0;$g < $qt; $g++){
        $tb = $value * ($g);

        echo "$value x $g =  $tb";
        echo "&nbsp; <br>";
    }



    ?>
    </p>
</body>
</html>