<table>
    <center><caption>Sujets postés sur le forum</caption></center>
    <tr>
        <th> Titre </th>
        <th> Auteur </th>
        <th> Description </th>
        <th> Nb Intérets </th>
        <th> Nb Signalement </th>
        <th> Actions </th>
    </tr>
    
    <?php
    foreach ($lesSujets as $unSujet) {
    ?>
    <tr>
        <td><?=$unSujet["titre"]?></td>
        <td><?=$unSujet["auteur"]?></td>
        <td><?=$unSujet["description"]?></td>
        <td><?=$unSujet["nb_interet"]?></td>
        <td><?=$unSujet["nb_signalement"]?></td>
        <td><a href="index.php?action=update"><intput class="glyphicon glyphicon-pencil" value="Modifier le sujet"></a>
    </tr>
    <?php
    }
    ?>
</table>