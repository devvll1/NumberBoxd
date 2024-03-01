<!-- movie/delete.php -->

<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<?=$this->include('include/nav')?>

<div class="container letterboxd-theme">
    <h1 class="text-light">Delete Movie</h1>

    <form action="<?= base_url() ?>movie/delete/<?= $movie->m_id ?>" method="post" class="row">
        <?php if(isset($validation)): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <div class="mb-3">
                <img src="<?= base_url('path/to/your/upload/directory/' . $movie->image) ?>" class="img-fluid rounded smaller-image" alt="Movie Image">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="moviename" class="form-label text-light h5">Movie Name</label>
                <input type="text" class="form-control letterboxd-input" id="moviename" name="moviename" value="<?= $movie->moviename ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label text-light h5">Rating</label>
                <input type="text" class="form-control letterboxd-input" id="rating" name="rating" value="<?= $movie->rating ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label text-light h5">Review</label>
                <textarea class="form-control letterboxd-input" id="review" name="review" readonly><?= $movie->review ?></textarea>
            </div>
            <div class="mb-3">
                <label for="datelog" class="form-label text-light h5">Date Watched</label>
                <input type="text" class="form-control letterboxd-input" id="datelog" name="datelog" value="<?= $movie->datelog ?>" readonly>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-danger letterboxd-btn">Delete</button>
            <a href="<?= base_url() ?>movie/list" class="btn btn-primary letterboxd-btn">Go Back</a>
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
        background-color: #E63462; /* Delete button color */
        color: #fff; /* Button text color */
    }

    .rounded {
        border-radius: 8px;
    }

    .smaller-image {
        max-width: 250px; /* Adjust the max-width to make the image smaller */
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
