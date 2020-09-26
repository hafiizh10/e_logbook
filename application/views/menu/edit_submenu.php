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
                                    <label for="text-input" class=" form-control-label">Name Title</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="id" value="<?= $user_sub_menu['id'] ?>">
                                    <input type="text" class="form-control" id="title" name="title" value="<?= $user_sub_menu['title'] ?>">
                                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Menu ID</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select class="custom-select" id="menu_id" name="menu_id">
                                        <?php foreach ($menu_id as $m) : ?>
                                            <?php if ($m['id'] == $user_sub_menu['menu_id']) : ?>
                                                <option value="<?= $m['id']; ?>" selected><?= $m['menu'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">URL</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="url" name="url" value="<?= $user_sub_menu['url'] ?>">
                                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Icon</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $user_sub_menu['icon'] ?>">
                                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Active?</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="form-check">
                                        <?php foreach ($check as $m) : ?>
                                            <?php if ($m == $user_sub_menu['is_active']) : ?>
                                                <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
                                            <?php else : ?>
                                                <input class="form-check-input" type="checkbox" name="is_active" value="1">
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
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