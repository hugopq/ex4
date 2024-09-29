<html>
    <head>
        <title>PHP Exercício 4</title>
    </head>
    <body>
        <?php include "menu.php"; ?>

        <h1>Registo</h1>
        <form action="exec_reg.php" method="GET">
            <p>
                <input type="text" name="username" placeholder="Nome de utilizador">
                <br/>
                <input type="text" name="name" placeholder="Nome">
                <br/>
                <input type="text" name="address" placeholder="Morada">
                <br/>
                <input type="email" name="email" placeholder="email">
                <br/>
                <input type="submit" value="efetuar registo">
            </p>
        </form>
    </body>
</html>