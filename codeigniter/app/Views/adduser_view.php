<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?>

<div class="col col-md-5 mx-auto mt-5">
    <h3><?= $page_title; ?></h3>
    <form action="<?= base_url().'users/add' ?>" method="post">
        <div class="row form-group mb-2">
            <label for="username" class="col-form-label col-4">User Name</label>
            <div class="col-8">
                <input type="text" name="username" id="username" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="password" class="col-form-label col-4">Password</label>
            <div class="col-8">
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="confirmpassword" class="col-form-label col-4">Password</label>
            <div class="col-8">
                <input type="confirmpassword" name="confirmpassword" id="password" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="fullname" class="col-form-label col-4">Full Name</label>
            <div class="col-8">
                <input type="text" name="fullname" id="fullname" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="email" class="col-form-label col-4">Email</label>
            <div class="col-8">
                <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>
        <div class="row form-group d-flex justify-content-between">
            <button type="submit" class="btn btn-success col-5">Register</button>
            <a href="<?= base_url() ?>" class="btn btn-warning col-5" >Back</a>
        </div>
    </form>
</div>

<?= $this->endSection('content') ?>