<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-10"><?= $title ?></h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" width="100px" height="100px" />
                                </div>
                                <div class="col-md-6">
                                    NIP : <strong><?= $user['nip']; ?></strong><br>
                                    Nama : <strong><?= $user['name']; ?></strong><br>
                                    Jabatan : <strong><?= $user['jabatan']; ?></strong><br>
                                    <?php foreach ($unit as $u) : ?>
                                        Unit : <strong><?= $u->unit ?></strong><br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->