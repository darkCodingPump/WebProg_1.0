<?php
?>
<link rel="stylesheet" href="./views/css/home.css">
<div class="jumbotron p-3 p-md-5 rounded staysDark row">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?php echo $models[0]["title"] ?></h1>
        <p class="lead my-3"><?php $blogtext = $models[0]['text'];
            if (strlen($blogtext > 20)) $blogtext = substr($models[0]['text'], 0, 150) . '...';
            echo $blogtext; ?></p>
        <p class="lead mb-0"><a href="/blog/<?php echo $models[0]['id'] ?>" class=" link-dark font-weight-bold">weiterlesen
                ...</a></p>
    </div><div class="col-md-2 pl-3">
    </div>
    <div class="col-md-4">
        <img class="FeaturePicture" src="/statics/<?php echo $models[0]['titlePicture'] ?>">
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250 background-dark">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $models[1]['category'] ?></strong>
                <h3 class="mb-0">
                    <a href="/blog/<?php echo $models[1]['id'] ?>"><?php echo $models[1]['title'] ?></a>
                </h3>
                <div class="mb-1 text-muted"><?php echo date('d M' ,strtotime($models[1]['date'])) ?></div>
                <p class="mb-auto "><?php $blogtext = $models[1]['text'];
                    if (strlen($blogtext > 20)) $blogtext = substr($models[1]['text'], 0, 100) . '...';
                    echo $blogtext; ?></p>
                <a href="/blog/<?php echo $models[1]['id'] ?>" >weiterlesen</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block previewHome" src="/statics/<?php echo $models[1]['titlePicture'] ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250 background-dark">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $models[2]['category'] ?></strong>
                <h3 class="mb-0">
                    <a href="/blog/<?php echo $models[2]['id'] ?>"><?php echo $models[2]['title'] ?></a>
                </h3>
                <div class="mb-1 text-muted"><?php echo date('d M' ,strtotime($models[2]['date'])) ?></div>
                <p class="mb-auto "><?php $blogtext = $models[2]['text'];
                    if (strlen($blogtext > 20)) $blogtext = substr($models[2]['text'], 0, 100) . '...';
                    echo $blogtext; ?></p>
                <a href="/blog/<?php echo $models[2]['id'] ?>" >weiterlesen</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block previewHome" src="/statics/<?php echo $models[2]['titlePicture'] ?>">
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250 background-dark">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $models[3]['category'] ?></strong>
                <h3 class="mb-0">
                    <a href="/blog/<?php echo $models[3]['id'] ?>"><?php echo $models[3]['title'] ?></a>
                </h3>
                <div class="mb-1 text-muted"><?php echo date('d M' ,strtotime($models[3]['date'])) ?></div>
                <p class="mb-auto "><?php $blogtext = $models[3]['text'];
                    if (strlen($blogtext > 20)) $blogtext = substr($models[3]['text'], 0, 100) . '...';
                    echo $blogtext; ?></p>
                <a href="/blog/<?php echo $models[3]['id'] ?>" >weiterlesen</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block previewHome" src="/statics/<?php echo $models[3]['titlePicture'] ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250 background-dark">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $models[4]['category'] ?></strong>
                <h3 class="mb-0">
                    <a href="/blog/<?php echo $models[4]['id'] ?>"><?php echo $models[4]['title'] ?></a>
                </h3>
                <div class="mb-1 text-muted"><?php echo date('d M' ,strtotime($models[4]['date'])) ?></div>
                <p class="mb-auto "><?php $blogtext = $models[4]['text'];
                    if (strlen($blogtext > 20)) $blogtext = substr($models[4]['text'], 0, 100) . '...';
                    echo $blogtext; ?></p>
                <a href="/blog/<?php echo $models[4]['id'] ?>" >weiterlesen</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block previewHome" src="/statics/<?php echo $models[4]['titlePicture'] ?>">
        </div>
    </div>
</div>
