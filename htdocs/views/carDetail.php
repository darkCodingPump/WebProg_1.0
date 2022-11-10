<?php
?>
<link rel="stylesheet" href="/views/css/carDetail.css" />
<img class="titlePics" src="/statics/<?php echo $model->Dateiname; ?>" alt="Bild">

<table class="table ">
    <tr>
        <th>Modellbezeichnung</th>
        <td> <?php echo $model->Modellbezeichnung ?> </td>
    </tr>
    <tr>
        <th>HSN</th>
        <td><?php echo $model->B_2_1 ?> </td>
    </tr>
    <tr><th>TSN</th><td><?php echo $model->B_2_2 ?> </td></tr>
    <tr><th>Fahrzeugklasse</th><td><?php echo $model->J ?> </td></tr>
    <tr><th>Aufbau</th><td><?php echo $model->vier ?> </td></tr>
    <tr><th>Marke</th><td><?php echo $model->D_1 ?> </td></tr>
    <tr><th>Variante</th><td><?php echo $model->D_2 ?> </td></tr>
    <tr><th>Hersteller</th><td><?php echo $model->zwei ?> </td></tr>
    <tr><th>Bezeichnung Fahrzeugklasse</th><td><?php echo $model->fuenf ?> </td></tr>
    <tr><th>EG-Typengenehmigung</th><td><?php echo $model->V_9 ?> </td></tr>
    <tr><th>Abgasnorm</th><td><?php echo $model->vierzehn ?> </td></tr>
    <tr><th>Kraftstoff</th><td><?php echo $model->P3 ?> </td></tr>
    <tr><th>NEFZ: Innerorts</th><td><?php echo $model->innerorts ?> </td></tr>
    <tr><th>Ausserorts</th><td><?php echo $model->ausserorts ?> </td></tr>
    <tr><th>Kombiniert</th><td><?php echo $model->kombiniert ?> </td></tr>
    <tr><th>CO2 kombiniert</th><td><?php echo $model->NEFZ_CO2_kombiniert ?> </td></tr>
    <tr><th>WLTP: sehr schnell</th><td><?php echo $model->sehr_schnell ?> </td></tr>
    <tr><th>schnell</th><td><?php echo $model->schnell ?> </td></tr>
    <tr><th>langsam</th><td><?php echo $model->langsam ?> </td></tr>
    <tr><th>CO2 kombiniert</th><td><?php echo $model->WLTP_CO2_kombiniert ?> </td>
    </tr>
</table>
