<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>movie/list" style="display: flex; align-items: center; font-family: 'Helvetica Neue', sans-serif; color: #81d742;">
      <img src="<?= base_url('public/img/logo1.png') ?>" alt="Numberboxd Logo" style="height: 20px; margin-right: 10px;">
      <span style="font-weight: bold;">Numberboxd</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid #81d742; margin-right: 5px;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>user/list" style="color: #81d742; border: 1px solid #81d742; padding: 5px 10px; border-radius: 5px; margin-right: 5px;">USer List</a>
          </li> -->
        <li class="nav-item">
          <a href="<?= base_url('movie/list') ?>"title="Movie Log">
            <img src="<?= base_url('public/img/list-square-svgrepo-com.png') ?>" alt="Movie Log" style="height: 46px; margin-left: 10px;">
          </a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>user/add" style="color: #81d742; border: 1px solid #81d742; padding: 5px 10px; border-radius: 5px; margin-right: 5px;">Add to Movie Diary</a>
          </li> -->

        <li class="nav-item">
        <a href="<?= base_url('movie/add') ?>"title="Add Movie to Diary">
          <img src="<?= base_url('public/img/add-square-svgrepo-com.png') ?>" alt="Add to Movie Diary" style="height: 39px; margin-right: 10px; margin-top: 3px;">
        </a>
          <!-- <a class="nav-link" href="<?= base_url() ?>movie/add" style="color: #81d742; border: 1px solid #81d742; padding: 5px 10px; border-radius: 5px; margin-right: 5px;">Add to Movie Diary</a> -->
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #81d742; border: 1px solid #81d742; padding: 5px 10px; border-radius: 5px; margin-right: 5px; margin-top:4px;">
            <?= session()->get('myFullName') ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url() ?>confirm_logout" style="color: #81d742;">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>