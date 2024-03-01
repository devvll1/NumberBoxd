<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<style>
    body {
        background-color: #1a1a1a; /* Dark background color */
        color: #fff; /* Light text color */
    }

    .card {
        background-color: #2b2b2b; /* Dark card background color */
        color: #fff; /* Light text color */
        border: 1px solid #555; /* Border color */
    }

    .card-title {
        color: #28a745; /* Letterboxd green color */
    }

    .form-label {
        color: #28a745; /* Letterboxd green color */
    }

    .btn-primary {
        background-color: #28a745; /* Letterboxd green color */
        border: 1px solid #28a745; /* Border color */
    }

    .btn-primary:hover {
        background-color: #218838; /* Darker green on hover */
        border: 1px solid #218838; /* Darker border on hover */
    }
</style>

<div class="container mt-5">
    <div class="card col-md-6 mx-auto">
        <div class="card-body">
        <img src="public\img\logo1.png" alt="Numberboxd Logo" class="img-fluid mx-auto d-block mb-3" style="max-width: 50%; height: auto;">
            <h3 class="card-title text-center mb-4">NUMBERBOXD</h3>
            <p class="card-title text-center mb-4">Your Film Activities (Bootleg Letterboxd)</p>

            <?php if(session()->get('invalid')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->get('invalid') ?>
                </div>
            <?php endif;?>

            <?php if(isset($validation)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors();?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url()?>login" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email')?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password')?>" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?=$this->endSection('content')?>
