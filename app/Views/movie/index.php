<!-- movie/index.php -->

<?=$this->extend('layout/main.php')?>

<?=$this->section('content')?>

<title>List of Movies</title>

<?=$this->include('include/nav')?>

<div class="container-fluid dark-bg mt-4">
    <?php if(session()->get('success-update-movie')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success-update-movie') ?>
        </div>
    <?php endif;?>
    <?php if(session()->get('success-delete-movie')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success-delete-movie') ?>
        </div>
    <?php endif;?>
    <?php if(session()->get('success-add-movie')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->get('success-add-movie') ?>
    </div>
<?php endif;?>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach($movies as $movie): ?>
            <div class="col mb-4">
                <div class="card h-100 dark-card">
                    <div class="position-relative">
                        <img src="<?= base_url('path/to/your/upload/directory/' . $movie->image) ?>" class="card-img-top img-fluid dark-image" style="height: 300px; object-fit: cover; border: 2px solid #fff;" alt="Movie Image">
                        <div class="overlay">
                            <a href="<?= base_url() ?>movie/view/<?= $movie->m_id ?>" class="btn btn-outline-light">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color:antiquewhite"><?= $movie->moviename ?></h5>
                        <p class="card-text"style="color:antiquewhite">Rating: <?= $movie->rating ?></p>
                        <p class="card-text"style="color:antiquewhite">Date Watched: <?= $movie->datelog ?></p>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <a href="<?= base_url() ?>movie/edit/<?= $movie->m_id ?>" class="btn btn-outline-warning">Edit</a>
                            <a href="<?= base_url() ?>movie/delete/<?= $movie->m_id ?>" class="btn btn-outline-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
    body {
        background-color: #1a1a1a; /* Dark background color */
        color: #ffffff; /* Text color */
    }

    .dark-bg {
        background-color: #1a1a1a; /* Dark background color for the container */    
    }

    .dark-card {
        background-color: #333; /* Dark background color for the card */
        border: 1px solid #555; /* Border color for the card */
    }

    .dark-image {
        border: 2px solid #fff; /* Border color for the image */
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card:hover .overlay {
        opacity: 1;
    }

    .overlay a {
        color: #fff;
        text-decoration: none;
    }
</style>

<?=$this->endSection('content')?>
