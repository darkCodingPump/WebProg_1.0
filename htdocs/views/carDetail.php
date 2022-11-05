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
        <th>B_2_1</th>
        <td><?php echo $model->B_2_1 ?> </td>
    </tr>
    <tr><th>B_2_2</th><td><?php echo $model->B_2_2 ?> </td></tr>
    <tr><th>J</th><td><?php echo $model->J ?> </td></tr>
    <tr><th>vier</th><td><?php echo $model->vier ?> </td></tr>
    <tr><th>D_1</th><td><?php echo $model->D_1 ?> </td></tr>
    <tr><th>D_2</th><td><?php echo $model->D_2 ?> </td></tr>
    <tr><th>zwei</th><td><?php echo $model->zwei ?> </td></tr>
    <tr><th>fuenf</th><td><?php echo $model->fuenf ?> </td></tr>
    <tr><th>V_9</th><td><?php echo $model->V_9 ?> </td></tr>
    <tr><th>vierzehn</th><td><?php echo $model->vierzehn ?> </td></tr>
    <tr><th>P3</th><td><?php echo $model->P3 ?> </td></tr>
    <tr><th>innerorts</th><td><?php echo $model->innerorts ?> </td></tr>
    <tr><th>ausserorts</th><td><?php echo $model->ausserorts ?> </td></tr>
    <tr><th>kombiniert</th><td><?php echo $model->kombiniert ?> </td></tr>
    <tr><th>NEFZ_CO2_kombiniert</th><td><?php echo $model->NEFZ_CO2_kombiniert ?> </td></tr>
    <tr><th>sehr_schnell</th><td><?php echo $model->sehr_schnell ?> </td></tr>
    <tr><th>schnell</th><td><?php echo $model->schnell ?> </td></tr>
    <tr><th>langsam</th><td><?php echo $model->langsam ?> </td></tr>
    <tr><th>WLTP_CO2_kombiniert</th><td><?php echo $model->WLTP_CO2_kombiniert ?> </td>
    </tr>
</table>
