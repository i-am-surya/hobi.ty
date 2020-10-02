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
      <h6 class="m-0 font-weight-bold text-info">Edit Category 
      </h6>
    </div>
    <div class="card-body">
      <?php
        
        if(isset($_POST['category_edit_btn'])){

          $id = $_POST['edit_id'];
          
          $query = "SELECT * FROM interests where id='$id'";
          $query_run = mysqli_query($connection,$query);

          foreach($query_run as $row)
          {
      ?>

      <form action="code.php" method="POST">
        
        <input type="hidden" name="update_id" value ="<?php echo $row['id']; ?>" >

        <div class="form-group">
          <label> Interest </label>
          <input type="text" name="update_name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Interest Name">
        </div>
        <div class="form-group">
          <label> Description </label>
          <input type="text" name="update_description" class="form-control" value="<?php echo $row['description']; ?>" placeholder="Enter Description">
        </div>

        <a href="interests.php" class="btn btn-danger my-3">Cancel</a>
        <button type="submit" name="category_update_btn" class="btn btn-info mx-2 my-3">Update</button>
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