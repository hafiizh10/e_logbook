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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Form <strong><?= $title ?></strong>
                        </div>
                        <div class="card-body card-block">
                            <?= form_open() ?>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal Kejadian</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="id" value="<?= $elogbook['id'] ?>">
                                    <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $elogbook['tgl'] ?>">
                                    <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Kejadian</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="kejadian" name="kejadian" value="<?= $elogbook['kejadian'] ?>">
                                    <?= form_error('kejadian', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Lokasi Kejadian</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $elogbook['lokasi'] ?>">
                                    <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Resiko</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select class="custom-select" id="resiko" name="resiko">
                                        <?php foreach ($listresiko as $lr) : ?>
                                            <?php if ($lr == $elogbook['resiko']) : ?>
                                                <option value="<?= $lr; ?>" selected><?= $lr ?></option>
                                            <?php else : ?>
                                                <option value="<?= $lr; ?>"><?= $lr ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tindakan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="tindakan" name="tindakan" value="<?= $elogbook['tindakan'] ?>">
                                    <?= form_error('tindakan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Keterangan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="ket" name="ket" value="<?= $elogbook['ket'] ?>">
                                    <?= form_error('ket', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->