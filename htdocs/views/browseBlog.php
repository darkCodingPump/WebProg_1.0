<?php
?>
<link rel="stylesheet" href="./views/css/blogview.css">
<div>
    <?php foreach ($models as $model):
        $blog = $model;
        $blogtext = $model['text'];
        ?>
    <div>
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $blog['category']?></strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="/blog/<?php echo $model['id'] ?>"><?php echo $model['title']?></a>
                </h3>
                <div class="mb-1 text-muted"><?php echo $blog['date'] ?></div>
                <p class="text-dark mb-auto"><?php if(strlen($blogtext > 20)) $blogtext = substr($blogtext, 0, 200).'...';
                    echo $blogtext; ?></p>
                <a href="/blog/<?php echo $model['id'] ?>">weiterlesen</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block titlePics" alt="Thumbnail [200x250]" src="/statics/<?php echo $blog['titlePicture'] ?>">
        </div>
    </div>
    <?php endforeach; ?>
</div>
