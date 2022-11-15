<?php
$bdd = new PDO('mysql:host=localhost;dbname=gestionemployebd;charset=utf8', 'root', '');
$query = $bdd->query('SELECT * FROM employe ORDER BY id DESC');
if(isset($_GET['search']) AND !empty($_GET['search'])){
    $search = htmlspecialchars($_GET['search']);
    $query = $bdd->query('SELECT * FROM employe WHERE prenom_employe LIKE "%'.$search.'%" ORDER BY id DESC');
    $query = $bdd->query('SELECT * FROM employe WHERE nom_employe LIKE "%'.$search.'%" ORDER BY id DESC');
    
}
?>

<form action="" method="get">
    <input type="search" name="search">
    <input type="submit" value="rechercher">
</form>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
    </thead>
    <tbody>
    <?php
while($d = $query->fetch()){
?>
        <tr>
            <td><?= $d['nom_employe']?></td>
            <td><?= $d['prenom_employe']?></td>
        </tr>
        <?php
}
?>
    </tbody>
</table>