<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Create User</h2>
    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option value="">Choose a Role</option>
        <option <?= get_select('role', 'Admin') ?> value="Admin">Admin</option>
        <option <?= get_select('role', 'User') ?> value="User">User</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>