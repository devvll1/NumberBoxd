<!-- movie/edit.php -->

<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<?=$this->include('include/nav')?>

<div class="container letterboxd-theme">
    <h1 class="text-light">Edit Movie</h1>

    <form action="<?= base_url('movie/edit/' . $movie->m_id) ?>" method="post" enctype="multipart/form-data" class="row">
        <?php if(isset($validation)): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="image" class="form-label text-light h5">Current Movie Image</label>
                <div>
                    <img src="<?= base_url('path/to/your/upload/directory/' . $movie->image) ?>" class="img-fluid rounded smaller-image" alt="Current Movie Image">
                </div>
            </div>

            <div class="mb-3">
                <label for="new_image" class="form-label text-light h5">New Movie Image (optional)</label>
                <input type="file" class="form-control letterboxd-input shorter-input" id="new_image" name="new_image">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="moviename" class="form-label text-light h5">Movie Name</label>
                <input type="text" class="form-control letterboxd-input" id="moviename" name="moviename" value="<?= set_value('moviename', $movie->moviename) ?>">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label text-light h5">Rating</label>
                <input type="text" class="form-control letterboxd-input" id="rating" name="rating" value="<?= set_value('rating', $movie->rating) ?>">
            </div>
            <div class="mb-3">
                <label for="review" class="form-label text-light h5">Review</label>
                <textarea class="form-control letterboxd-input" id="review" name="review"><?= set_value('review', $movie->review) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="datelog" class="form-label text-light h5">Date Watched</label>
                <input type="text" class="form-control letterboxd-input" id="datelog" name="datelog" value="<?= set_value('datelog', $movie->datelog) ?>">
            </div>
            <div class="mb-3">
                <a href="<?= base_url() ?>movie/list" class="btn btn-light letterboxd-btn">Go Back</a>
                <button type="submit" class="btn btn-light letterboxd-btn">Save Changes</button>
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
        background-color: #E63462; /* Light button color */
        color: #fff; /* Button text color */
        border: none;
    }

    .rounded {
        border-radius: 8px;
    }

    .smaller-image {
        max-width: 270px; /* Adjust the max-width to make the image smaller */
    }

    .shorter-input {
        max-width: 270px; /* Adjust the max-width to make the input shorter */
    }

    h1, h5 {
        color: goldenrod; /* Set headers color to goldenrod */
    }
</style>

<?=$this->endSection('content')?>
