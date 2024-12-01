
<?php $this->include('app.layouts.header', ['categories' => $categories] ); ?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <?php 
             foreach ($articles as $article) {
             ?>
            <section class="col-md-4">
                <h2><?= $article['title'] ?></h2>
                <p><?= $article['body'] ?></p>
                <p><a class="btn btn-primary" href="<?php $this->url('/home/show/' . $article['id']) ?>" role="button">View details »</a></p>
            </section></br></br>
           <?php }?>
        </section>
    </section>
    <?php $this->include('app.layouts.footer'); ?>
//? finis amirhoseniliw :)
