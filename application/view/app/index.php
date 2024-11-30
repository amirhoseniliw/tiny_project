<?php $this->include('app.layouts.header'); ?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <?php foreach ($articles as $article) {
             ?>
            <section class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-primary" href="detail.html" role="button">View details »</a></p>
            </section></br></br>
           <?php }?>
        </section>
    </section>
    <?php $this->include('app.layouts.footer'); ?>

