<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>formulaire avec mdp en une page</title>
    </head>
    <body>

        
            

            <?php
                
                if (!isset($_POST['mdp']) || $_POST['mdp'] != 'kangourou' ) {
                    ?>
                    <form action="unepage.php" method="post">
                      <label for="">Mot de passe : <input type="password" name="mdp"/> </label>
                      <input type="submit" value="Validé" />
                    </form>
                 
                <?php
                }
                if (isset($_POST['mdp']) && $_POST['mdp'] != 'kangourou')  {
                        echo 'Mot de passe incorrect';
                } 

                else if (isset($_POST['mdp']) && $_POST['mdp'] == 'kangourou' ) {
                    echo 'Voici les donnée cachée pour la nasa';
                }
    
            ?>


    </body>
</html>
