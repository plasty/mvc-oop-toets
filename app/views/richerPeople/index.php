<?php echo $data["richerPeople"]; ?>

<table>
    <thead>
        <th>id</th>
        <th>naam</th>
        <th>vermogen</th>
        <th>leeftijd</th>
        <th>bedrijf</th>
    </thead>
    <tbody>
        <?= $data['richerPeople'] ?>
    </tbody>
</table>
<a href="<?= URLROOT; ?>/homepages/index">terug</a>