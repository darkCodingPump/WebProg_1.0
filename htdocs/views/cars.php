<?php
?>
<link rel="stylesheet" href="./views/css/cars.css">
<table class="table table-hover .table-responsive">
    <thead>
    <tr>
        <th>Modellbezeichnung</th>
        <th>B_2_1</th>
        <th>B_2_2</th>
        <th>J</th>
        <th>vier</th>
        <th>D_1</th>
        <th>D_2</th>
        <th>zwei</th>
        <th>fuenf</th>
        <th>V_9</th>
        <th>vierzehn</th>
        <th>P3</th>
        <th>innerorts</th>
        <th>ausserorts</th>
        <th>kombiniert</th>
        <th>NEFZ_CO2_kombiniert</th>
        <th>sehr_schnell</th>
        <th>schnell</th>
        <th>langsam</th>
        <th>WLTP_CO2_kombiniert</th>
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
