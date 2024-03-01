<!-- movie/view.php -->

<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<?=$this->include('include/nav')?>

<div class="container mt-5">
    <div class="text-light">
        <h3 class="mb-4">Movie Details</h3>

        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="<?= base_url('path/to/your/upload/directory/' . $movie->image) ?>" class="img-fluid rounded" alt="Movie Image">
            </div>
            <div class="col-md-8">
                <form action="#" method="post">
                    
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h6 class="card-title custom-header">Movie Name</h6>
                        <p class="card-text"><?= $movie->moviename ?></p>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title custom-header">Rating</h6>
                        <p class="card-text"><?= $movie->rating ?></p>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title custom-header">Comment/Reviews</h6>
                        <p class="card-text"><?= $movie->review ?></p>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title custom-header">Date Logged</h6>
                        <p class="card-text"><?= $movie->datelog ?></p>
                    </div>
                </div>


                    <a href="<?= base_url() ?>movie/list" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #121212; /* Dark background color for the entire page */
        color: #fff; /* Light text color */
    }

    .dark-input {
        background-color: #333; /* Dark background color for input fields */
        color: #fff; /* Light text color for input fields */
    }

    .rounded {
        border-radius: 8px;
    }

    .form-label {
        color: #9f9f9f; /* Lighter label color */
    }
    .custom-header {
        color: #ffc107; /* Custom color for headers, e.g., yellow */
        font-weight: bold; /* Bold font for emphasis */
        margin-bottom: 0.5rem; /* Adjust margin for spacing */
    }

</style>

<?=$this->endSection('content')?>
