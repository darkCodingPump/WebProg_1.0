<?php
?>
<link rel="stylesheet" href="./views/css/cars.css">
<table class="table table-hover .table-responsive">
    <thead>
    <tr>
        <th>Modellbezeichnung</th>
        <th>HSN</th>
        <th>TSN</th>
        <th>Fahrzeugklasse</th>
        <th>Aufbau</th>
        <th>Marke</th>
        <th>Variante</th>
        <th>Hersteller</th>
        <th>Bezeichnung Fahrzeugklasse</th>
        <th>EG-Typengenehmigung</th>
        <th>Abgasnorm</th>
        <th>Kraftstoff</th>
        <th>NEFZ: Innerorts</th>
        <th>Ausserorts</th>
        <th>Kombiniert</th>
        <th>CO2 kombiniert</th>
        <th>WLTP: sehr schnell</th>
        <th>schnell</th>
        <th>langsam</th>
        <th>CO2 kombiniert</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($models as $model):
        unset($model["Dateiname"]);?>
    <tr onclick="document.location = '/car/<?php echo $model["id"] ?>';">
        <?php unset($model["id"]);
        foreach ($model as $item): ?>
            <td><?php echo $item ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
