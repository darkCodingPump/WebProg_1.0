<?php
?>
    <link rel="stylesheet" href="./views/css/results.css">
<?php if ($BlogResults != null): ?>
    <h2>Blogeinträge</h2>
    <?php foreach ($BlogResults as $blogResult):
        $blog = $blogResult;
        $blogtext = $blogResult['text'];
        ?>
        <div>
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo $blog['category'] ?></strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/blog/<?php echo $blog['id'] ?>"><?php echo $blog['title'] ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $blog['date'] ?></div>
                    <p class="text-dark mb-auto"><?php if (strlen($blogtext > 20)) $blogtext = substr($blogtext, 0, 200) . '...';
                        echo $blogtext; ?></p>
                    <a href="/blog/<?php echo $blog['id'] ?>">weiterlesen</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block titlePics" alt="Thumbnail [200x250]"
                     src="/statics/<?php echo $blog['titlePicture'] ?>">
            </div>
        </div>
    <?php endforeach; endif; ?>
<?php if ($CarResults != null): ?>
    <h2>Autos</h2>
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
        <?php foreach ($CarResults as $CarResult):
            unset($CarResult["Dateiname"]); ?>
            <tr onclick="document.location = '/car/<?php echo $CarResult["id"] ?>';">
                <?php unset($CarResult["id"]);
                foreach ($CarResult as $item): ?>
                    <td><?php echo $item ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>


<?php if($CarResults == null && $BlogResults == null): ?>
    <h2>Keine Ergebnisse</h2>
<?php endif; ?>