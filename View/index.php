
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employé</title>
</head>
<body>
    <?php
        include 'recherche.php';
    ?>
    <h1>Liste Employé</h1>
    <a href="index.php?Controller=employe&action=ajout" class="btn">Ajout</a>
    <table class="border">
        <thead>
            <tr>
                <th>Nom Employé</th>
                <th>Prénom Employé</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $employe){
                    ?>
                    <tr>
                    <td><?php echo $employe['nom_employe']?></td>
                    <td><?php echo $employe['prenom_employe']?></td>
                    <td>
                        <a href="index.php?Controller=employe&action=modifier&id=<?php echo $employe['id']; ?>" class="btn">Modifier</a>
                        <a href="index.php?Controller=employe&action=supprimer&id=<?php echo $employe['id']; ?>" class="btn">Supprimer</a>
                    </td>
                </tr>
                    <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>