<?php

include('security.php');
include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>

  <!-- EDIT LOCATION PAGE  -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-info">Edit Location 
      </h6>
    </div>
    <div class="card-body">
      <?php
        
        if(isset($_POST['location_edit_btn'])){

          $id = $_POST['edit_id'];
          
          $query = "SELECT * FROM locations where id='$id'";
          $query_run = mysqli_query($connection,$query);

          foreach($query_run as $row)
          {
            ?>
      <form action="code.php" method="POST">
        
        <input type="hidden" name="edit_id" value ="<?php echo $row['id']; ?>" >
        <div class="form-group">
          <label> District </label>
          <input type="text" name="edit_district" class="form-control" value="<?php echo $row['district']; ?>" placeholder="Enter District">
        </div>
        <div class="form-group">
          <label> State </label>
          <input type="text" name="edit_state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="Enter State">
        </div>
        <div class="form-group">
          <label> Country </label>
          <input type="text" name="edit_country" class="form-control" value="<?php echo $row['country']; ?>" placeholder="Enter Country">
        </div>

        <a href="locations.php" class="btn btn-danger my-3">Cancel</a>
        <button type="submit" name="location_update_button" class="btn btn-info mx-2 my-3">Update</button>
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