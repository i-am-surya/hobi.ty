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
        
        if(isset($_POST['event_edit_btn'])){

          $id = $_POST['edit_id'];
          
          $query = "SELECT * FROM events where id='$id'";
          $query_run = mysqli_query($connection,$query);

          foreach($query_run as $row)
          {
            ?>
      <form action="code.php" method="POST">
        
        <input type="hidden" name="edit_id" value ="<?php echo $row['id']; ?>" >
        <div class="form-group">
          <label> Event </label>
          <input type="text" name="update_event_name" class="form-control" value="<?php echo $row['eventname']; ?>" placeholder="Enter Event Name">
        </div>
        <div class="form-group">
          <label> Description </label>
          <input type="text" name="update_event_description" class="form-control" value="<?php echo $row['eventdescription']; ?>" placeholder="Enter Description">
        </div>
        <div class="form-group">
          <label> Event Type </label>
          <select name="update_event_type" class="form-control">
            <option value="public"> Public </option>
            <option value="private"> Private </option>
          </select>
        </div>

        <a href="events.php" class="btn btn-danger my-3">Cancel</a>
        <button type="submit" name="event_update_button" class="btn btn-info mx-2 my-3">Update</button>
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