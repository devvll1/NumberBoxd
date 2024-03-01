<?=$this->extend('layout/main.php')?>

<?=$this->section('content')?>

<title>List of Users</title>

<?=$this->include('include/nav')?>

    <div class="container">
    <?php if(session()->get('success-update-user')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo session()->get('success-update-user') ?>
        </div>
    <?php endif;?>
    <?php if(session()->get('success-delete-user')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo session()->get('success-delete-user') ?>
        </div>
    <?php endif;?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
    <tr>
      <td><?=$user->user_id?></td>
      <td><?=$user->first_name?></td>
      <td><?=$user->middle_name?></td>
      <td><?=$user->last_name?></td>
      <td><?=$user->age?></td>
      <td>
          <div class="btn-group" role="group" aria-label="Default button group">
              <a href="<?=base_url()?>user/view/<?=$user->user_id?>" class="btn btn-outline-primary">View</a>
              <a href="<?=base_url()?>user/edit/<?=$user->user_id?>" class="btn btn-outline-warning">Edit</a>
              <a href="<?=base_url()?>user/delete/<?=$user->user_id?>" class="btn btn-outline-danger">Delete</a>
          </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

<?=$this->endSection('content')?>



    