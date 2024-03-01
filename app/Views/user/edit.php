<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<?=$this->include('include/nav')?>

<div class="container">
    <form action="<?=base_url()?>user/edit/<?=$user->user_id?>" method="post">
    <?php if(isset($validation)): ?>
      <div class="alert alert-danger" role="alert">
          <?=$validation->listErrors();?>
      </div>
    <?php endif; ?>
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?=set_value('first_name', $user->first_name)?>">
    </div>
    <div class="mb-3">
      <label for="middle_name" class="form-label">Middle Name</label>
      <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=set_value('middle_name', $user->middle_name)?>">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="<?=set_value('last_name', $user->last_name)?>">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="text" class="form-control" id="age" name="age" value="<?=set_value('age', $user->age)?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email', $user->email)?>">
  </div>
  <a href="<?=base_url()?>user/list" class="btn btn-primary">Go Back</a>
  <button type="submit" class="btn btn-primary">Save</button>
  </form>
    </div>


<?=$this->endSection('content')?>