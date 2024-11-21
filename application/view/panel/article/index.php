<?php $this->include('panel.layouts.header'); ?>


                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="<?php $this->url('/article/create') ?>" class="btn btn-sm btn-success">Create</a>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>cat_id</th>
                            <th>body</th>
                            <th>setting</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                             foreach ($articles as $aritcle) {
                               ?>
                        <tr>
                            <td><?= $aritcle['id'] ?></td>
                            <td><?= $aritcle['title'] ?></td>
                            <td><?= $aritcle['cat_id'] ?></td>
                            <td><?= substr($aritcle['body'], 0 ,10) ?></td>
                            <td>
                                <a href="<?php $this->url('/article/edit/').$aritcle['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="<?php $this->url('/article/delete/'.$aritcle['id'] ) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr><?php }?>
                       
                        </tbody>
                    </table>
                </section>
                <?php $this->include('panel.layouts.footer'); ?>


