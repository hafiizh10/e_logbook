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
                    Tambah Logbook
                </button>
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIP</th>
                                <th>Tanggal</th>
                                <th>Kejadian</th>
                                <th>Lokasi</th>
                                <th>Resiko</th>
                                <th>Tindakan</th>
                                <th>Keterangan</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($logbookuser as $lbu) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $lbu->nip ?></td>
                                    <td><?= $lbu->tgl ?></td>
                                    <td><?= $lbu->kejadian ?></td>
                                    <td><?= $lbu->lokasi ?></td>
                                    <td><?= $lbu->resiko ?></td>
                                    <td><?= $lbu->tindakan ?></td>
                                    <td><?= $lbu->ket ?></td>
                                    <td><?= $lbu->nama ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>fitur/edit_book/<?= $lbu->id ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url(); ?>fitur/hapus_book/<?= $lbu->id ?>" class="btn btn-danger btn-sm tombol-hapus">Delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php foreach ($unit as $u) : ?>
                <h2 class="title-1">E-Logbook Unit : <?= $u->unit ?></h2>
            <?php endforeach; ?>
            <div class="row m-t-25">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIP</th>
                                <th>Tanggal</th>
                                <th>Kejadian</th>
                                <th>Lokasi</th>
                                <th>Resiko</th>
                                <th>Tindakan</th>
                                <th>Keterangan</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($logbook as $lb) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $lb['nip']; ?></td>
                                    <td><?= $lb['tgl']; ?></td>
                                    <td><?= $lb['kejadian']; ?></td>
                                    <td><?= $lb['lokasi']; ?></td>
                                    <td><?= $lb['resiko']; ?></td>
                                    <td><?= $lb['tindakan']; ?></td>
                                    <td><?= $lb['ket']; ?></td>
                                    <td><?= $lb['nama']; ?></td>
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
                <h5 class="modal-title" id="newRoleModalLabel">Tambah Logbook</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('fitur'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="nip" name="nip" value="<?= $user['nip'] ?>">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="tgl" name="tgl">
                </div>
                <div class="form-group">
                    <textarea name="kejadian" id="kejadian" rows="4" placeholder="Tulis Kejadian" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Kejadian">
                </div>
                <div class="form-group">
                    <select name="resiko" id="resiko" class="form-control">
                        <option value="">Resiko</option>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="tindakan" id="tindakan" rows="4" placeholder="Tulis Tindakan" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="ket" id="ket" rows="4" placeholder="Tulis Keterangan" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $user['name'] ?>">
                    <input type="hidden" class="form-control" id="level" name="level" value="<?= $user['jabatan'] ?>">
                    <input type="hidden" class="form-control" id="kode" name="kode" value="<?= $user['kode'] ?>">
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