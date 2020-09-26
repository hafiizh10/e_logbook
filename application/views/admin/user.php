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
                    Add New User
                </button>
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIP</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Jabatan</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($alluser as $au) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $au->nip ?></td>
                                    <td><?= $au->name ?></td>
                                    <td><?= $au->username ?></td>
                                    <td><?= $au->jabatan ?></td>
                                    <td><?= $au->unit ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/hapus_user/<?= $au->id ?>" class="badge badge-pill badge-danger tombol-hapus">delete</a>
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
                <h5 class="modal-title" id="newRoleModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('admin/user'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Pegawai">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP Pegawai">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="">Jabatan</option>
                        <option value="Department Head">Department Head</option>
                        <option value="Section Head">Section Head</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="kode" id="kode" class="form-control">
                        <option value="">Select Unit</option>
                        <?php foreach ($unit as $u) : ?>
                            <option value="<?= $u['kode']; ?>"><?= $u['unit']; ?></option>
                        <?php endforeach; ?>
                    </select>
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