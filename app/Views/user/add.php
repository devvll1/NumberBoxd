<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<title>Add User</title>

<?=$this->include('include/nav')?>

    <div class="container">
    <form action="<?=base_url()?>user/add" method="post">
    <?php if(session()->get('success-add-user')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo session()->get('success-add-user') ?>
        </div>
    <?php endif;?>
    <?php if(isset($validation)): ?>
      <div class="alert alert-danger" role="alert">
          <?=$validation->listErrors();?>
      </div>
    <?php endif; ?>
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?=set_value('first_name')?>">
    </div>
    <div class="mb-3">
      <label for="middle_name" class="form-label">Middle Name</label>
      <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=set_value('middle_name')?>">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="<?=set_value('last_name')?>">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="text" class="form-control" id="age" name="age" value="<?=set_value('age')?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email')?>">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="confirm_password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>

<?=$this->endSection('content')?>


