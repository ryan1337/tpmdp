<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title></title>
    </head>
    <body>
    
        <?php
            
            if (isset($_POST['mdp']) && $_POST['mdp'] === 'kangourou') {
                echo 'Voici les données sécurisé par la nasa'; 
            }else {
                echo 'mot de passe incorrecte';
            }

         ?>

    </body>
</html>
