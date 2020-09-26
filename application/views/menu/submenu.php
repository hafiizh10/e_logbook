<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?= $title ?></h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mediumModal">
                    Add New Submenu
                </button>
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Menu</th>
                                <th>Url</th>
                                <th>Icon</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $sm['title']; ?></td>
                                    <td><?= $sm['menu']; ?></td>
                                    <td><?= $sm['url']; ?></td>
                                    <td><?= $sm['icon']; ?></td>
                                    <td><?= $sm['is_active']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>menu/edit_submenu/<?= $sm['id'] ?>" class="badge badge-pill badge-success">edit</a>
                                        <a href="<?= base_url(); ?>menu/hapus_submenu/<?= $sm['id'] ?>" class="badge badge-pill badge-danger">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->

<!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('menu/submenu'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                </div>
                <div class="form-group">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<!-- end modal medium -->