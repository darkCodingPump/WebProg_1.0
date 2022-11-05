<?php
?>

<link rel="stylesheet" href="/views/css/blogview.css" />
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?php echo $model->title ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Veröffentlicht am <?php echo date('d M Y' ,strtotime($model->date)) ?> </div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light"><?php echo $model->category ?></a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded"
                                          src="/statics/<?php echo $model->titlePicture ?>" alt="..."/></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4"><?php echo $model->text ?></p>
                </section>
            </article>
        </div>
        <div class="col-lg-4 ">
            <div class="card mb-4 background-light">
                <div class="card-header">Über den Autor</div>
                <div class="card-body">
                    <p>
                        Ich bin Tobi
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
