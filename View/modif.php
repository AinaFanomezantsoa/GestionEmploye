<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employé</title>
    </head>
<body>
    <h2>Modifier Employé</h2>
    <?php  foreach ($dataMod as $employe){;?>

    <form method="POST" action="index.php?Controller=employe&action=edit">
<<<<<<< HEAD
       <input type="text" name="id" hidden value="<?php echo $employe['id']?>">
=======
       <input type="text" name="id_employe" hidden value="<?php echo $employe['id_employe']?>">
>>>>>>> 1cd47740c7a32b17ffede65017c300e27b1ce89f
        <label for="name">Nom Employé</label>
        <input type="text" name="nom_employe" value="<?php echo $employe['nom_employe']?>"><br><br>
        <label for="name">Prénom Employé</label>
        <input type="text" name="prenom_employe" value="<?php echo $employe['prenom_employe']?>"><br><br>
        <input type="submit" value="modifier">
<<<<<<< HEAD

=======
        
>>>>>>> 1cd47740c7a32b17ffede65017c300e27b1ce89f
    </form>
    <?php
        }?>
</body>
</html>
</html>