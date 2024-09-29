<?php
    //buscar a variável created por GET
    $created = false;
    if(array_key_exists('created',$_GET))
        $created = $_GET['created'];
?>
<html>
    <head>
        <title>PHP Exercício 4</title>
    </head>
    <body>
        <?php               
            include "menu.php"; 
          
            if($created)
            {
                //caso a variável created seja verdadeira 
                //mostrar a mensagem
                echo "Utilizador criado com sucesso.";
            }

            include "users.php";
        ?>
    </body>
</html>