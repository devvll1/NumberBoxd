<!-- movie/add.php -->

<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<title>Add Movie</title>

<?=$this->include('include/nav')?>

<div class="container letterboxd-theme">
    <h1 class="text-light">Add Movie</h1>

    <form action="<?= base_url() ?>movie/add" method="post" enctype="multipart/form-data" class="row">
        <?php if(session()->get('success-add-movie')): ?>
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success-add-movie') ?>
                </div>
            </div>
        <?php endif;?>

        <?php if(isset($validation)): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="image" class="form-label text-light h5">Movie Image</label>
                <input type="file" class="form-control letterboxd-input" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="moviename" class="form-label text-light h5">Movie Name</label>
                <input type="text" class="form-control letterboxd-input" id="moviename" name="moviename" value="<?= set_value('moviename') ?>">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label text-light h5">Rating</label>
                <input type="text" class="form-control letterboxd-input" id="rating" name="rating" value="<?= set_value('rating') ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="review" class="form-label text-light h5">Review</label>
                <textarea class="form-control letterboxd-input" id="review" name="review"><?= set_value('review') ?></textarea>
            </div>
            <div class="mb-3">
                <label for="datelog" class="form-label text-light h5">Date Watched</label>
                <input type="date" class="form-control letterboxd-input" id="datelog" name="datelog" value="<?= set_value('datelog') ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-light letterboxd-btn">Submit</button>
                <a href="<?= base_url() ?>movie/list" class="btn btn-light letterboxd-btn">Back</a>
            </div>
        </div>
    </form>
</div>

<style>
    body {
        background-color: #1D1E22; /* Dark background color for the entire page */
        color: #fff; /* Light text color */
    }

    .letterboxd-theme {
        background-color: #1D1E22; /* Dark background color for the entire page */
        color: #fff; /* Light text color */
    }

    .letterboxd-input {
        background-color: #333; /* Dark background color for input fields */
        color: #fff; /* Light text color for input fields */
    }

    .letterboxd-btn {
        background-color: #E63462; /* Button color */
        color: #fff; /* Button text color */
        border: none;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 8px;
    }
</style>

<?=$this->endSection('content')?>
