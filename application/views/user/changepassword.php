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
            <div class="col-lg-8 m-t-10">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="row m-t-25">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            Form <strong><?= $title ?></strong>
                        </div>
                        <div class="card-body card-block">
                            <?= form_open('user/changepassword') ?>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Current Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">New Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="new_password1" name="new_password1">
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Repeat Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="new_password2" name="new_password2">
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>
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