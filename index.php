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

        <h1  >Login</h1>
        <h2> Login </h2>

    </header>

    <form action="index.php" method="POST">
        <input placeholder="Username" type="username" name="user">
        <br><br>
        <input placeholder="Password" type="password" name="pass">
        <br><br>
        <input type="submit" name="log in">
    </form>
    <p>
        <?php
            

            if(isset($_POST['user'])){
                $u = $_POST['user'];
                $p = $_POST['pass'];

                if($u == "adm"){
                    if($p == 123){
                        header("location: menu.php");
                   }else{
                       echo "Senha inválida";
                   }
                }else{
                    echo "Usuário inválido";
                }
    
            }

        ?>

    </p>
</body>
</html>