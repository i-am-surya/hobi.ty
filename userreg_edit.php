<?php

include('security.php');
include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>

  <!-- EDIT ADMIN PAGE  -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-info">Edit User Profile 
      </h6>
    </div>
    <div class="card-body">
      <?php
        
        if(isset($_POST['edit_btn'])){

          $id = $_POST['edit_id'];
          
          $query = "SELECT * FROM register where id='$id'";
          $query_run = mysqli_query($connection,$query);

          foreach($query_run as $row)
          {
            ?>
      <form action="code.php" method="POST">
        
        <input type="hidden" name="edit_id" value ="<?php echo $row['id']; ?>" >
        <div class="form-group">
          <label> Username </label>
          <input type="text" name="edit_username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="edit_email" class="form-control checking_email" value="<?php echo $row['email']; ?>" placeholder="Enter Email">
          <small class="error_email" style="color: red;"></small>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="edit_password" class="form-control" value="<?php echo $row['password']; ?>" placeholder="Enter Password">
        </div>

        <a href="userregister.php" class="btn btn-danger my-3">Cancel</a>
        <button type="submit" name="userupdate_btn" class="btn btn-info mx-2 my-3">Update</button>
        <?php
            }
          }

        ?>
      </div> 

    </form> 
  </div>
</div>

<?php

  include('includes/scripts.php');

?>