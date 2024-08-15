<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?>
<div class="col col-md-5 mx-auto mt-5">
    <h3><?= $page_title; ?></h3>
    <form action="" method="post">
        <div class="row form-group mb-2">
            <label for="username" class="col-form-label col-4">User Name</label>
            <div class="col-8">
                <input type="text" name="username" id="username" class="form-control" value="<?= $user->username ?>" readonly>
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="fullname" class="col-form-label col-4">Full Name</label>
            <div class="col-8">
                <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user->fullname ?>" readonly>
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="email" class="col-form-label col-4">Email</label>
            <div class="col-8">
                <input type="email" name="email" id="email" class="form-control" value="<?= $user->email ?>" readonly>
            </div>
        </div>
        <div class="row form-group d-flex justify-content-end">
            <a href="<?= base_url() ?>" class="btn btn-warning col-5" >Back</a>
        </div>
    </form>
</div>
<?= $this->endSection('content') ?>