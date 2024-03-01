<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<style>
    body {
        background-color: #14181C;
        color: #ECEFF1;
    }

    .card {
        background-color: #263238;
        border: none;
        border-radius: 8px;
    }

    .card-body {
        padding: 40px;
    }

    h3 {
        color: #FFD600;
    }

    .btn-danger {
        background-color: #FF5252;
        border-color: #FF5252;
    }

    .btn-secondary {
        background-color: #546E7A;
        border-color: #546E7A;
    }

    .btn-danger:hover, .btn-danger:active, .btn-danger:focus {
        background-color: #FF1744;
        border-color: #FF1744;
    }

    .btn-secondary:hover, .btn-secondary:active, .btn-secondary:focus {
        background-color: #455A64;
        border-color: #455A64;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="mb-4">Are you sure you want to logout?</h3>
                    <h5 class="mb-1" style="color: white;">Logging out will end your current session.</h5>
                    <img src="<?= base_url('public/img/logo1.png') ?>" alt="Logout Image" class="img-fluid mb-4">

                    <div class="row">
                        <div class="col">
                            <a href="<?= base_url() ?>logout" class="btn btn-danger btn-block">Yes, Logout</a>
                        </div>
                        <div class="col">
                            <a href="<?= base_url() ?>movie/list" class="btn btn-secondary btn-block">No, Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection('content')?>
