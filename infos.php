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
            align-self: center;

        }
    </style>
</head>
<body>
<header>

    <h1  >Calculadora muito louca </h1>
    <h2> Infos </h2>

</header>

<form action="infos.php" method="POST">
    <label>
        Nome:
        <input placeholder="Nome" type="text" name="Nome">
        &nbsp; Sobrenome:
        <input placeholder="Sobrenome" type="text" name="sobrenome"><br><br>
        Idade:
        <input placeholder="Idade" type="number" name="idade">&nbsp;&nbsp;
        CPF:
        <input placeholder="CPF" type="number" name="cpf">
    </label>
    <br>
    <br>
    <label>
        Rua:
        <input placeholder="Rua" type="text" name="rua">
        Número:
        <input placeholder="número" type="number" name="num">

        Complemento:
        <input placeholder="Complemento" type="text" name="complemento">
    </label>
    <br>
    <br>
    <label>
        País:
        <input placeholder="País" type="text" name="pais">
        Estado:
        <input placeholder="Estado/Província" type="text" name="estado">
        Cidade:
        <input placeholder="Cidade" type="text" name="cidade">
    </label>
    <br>
    <br>
    <label>
        Telefone:
        <input placeholder="Phone" type="tel" name="fone">
        E-mail:
        <input placeholder="E-mail" type="email" name="email">
    </label>
    <br>
    <br>
    <label>
        Tipo sanguíneo:
        O&plus; <input placeholder="O+" type="radio" name="ts">&nbsp;
        O-<input placeholder="O-" type="radio" name="ts">&nbsp;
        A<input placeholder="AB" type="radio" name="ts">&nbsp;
        B<input placeholder="A" type="radio" name="ts">&nbsp;
        AB<input placeholder="B" type="radio" name="ts">&nbsp;
        <br><br>
        Fez senai?
        <br>
        Sim:
        <input  type="radio" name="op">&nbsp;<br>
        Não:
        <input  type="radio" name="op">
        <br>
        <br>
        Nome de 5 cachorros:
        <br><br>
        <input placeholder="Nome 1" type="text" name="dog1">
    </label>
    <br><br>
    <input type="submit" value="SHOW">
</form>
<p>
    <?php



    ?>
</p>
</body>
</html>