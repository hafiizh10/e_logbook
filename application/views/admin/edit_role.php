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
                                    <label for="text-input" class=" form-control-label">Name Role</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="id" value="<?= $user_role['id'] ?>">
                                    <input type="text" id="role" name="role" value="<?= $user_role['role'] ?>" class="form-control">
                                    <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
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