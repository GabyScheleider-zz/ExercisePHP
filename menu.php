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
    
    <form action="menu.php" method="GET" >

        
        <input type="submit" value="Tabuada" name="tab">
        <input type="submit" value="Calculadora" name="calc">
        <input type="submit" value="Infos" name="info">

        
    </form>

    <?php
        

        if(isset($_GET['tab'])){
            
            header("location: tabuada.php");

        }elseif(isset($_GET['calc'])){
            
            header("location: calculadora.php");

        }elseif(isset($_GET['info'])){
            
            header("location: infos.php");
            
        }
    ?>
    
</body>
</html>