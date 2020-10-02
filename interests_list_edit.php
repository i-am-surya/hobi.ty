<?php

include('security.php');
include('includes/header.php');
include('includes/sidebar.php');

?>

<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>

  <!-- EDIT CATEGORY LIST PAGE  -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-info">Edit Category List
      </h6>
    </div>
    <div class="card-body">
      <?php

      if (isset($_POST['category_list_edit_btn'])) {

        $id = $_POST['edit_id'];

        $query = "SELECT * FROM interests_list where id='$id'";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $rowedit) {
      ?>

          <form action="code.php" method="POST">

            <input type="hidden" name="updating_id" value="<?php echo $rowedit['id']; ?>">

            <?php

              $category = "SELECT * FROM interests";

              $category_run = mysqli_query($connection,$category);

              if(mysqli_num_rows($category_run) > 0)
              {
                ?>
              <div class="form-group">
                <label> Category List Name </label>
                <select name="list_id" class="form-control" required>
                  <option value="">Choose your Interest Category</option>
                  <?php

                    foreach($category_run as $row)
                    {
                      
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                  <?php
                   
                   }

                  ?>
                </select>
              </div>
              
                <?php

              }
              else
              {
                echo "No data available !";
              }
              
            ?>
            
            <div class="form-group">
                <label> Category List Name </label>
                <input type="text" name="list_name" class="form-control" value="<?php echo $rowedit['listname']; ?>" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="list_description" class="form-control" value="<?php echo $rowedit['listdescription']; ?>" required>
            </div>

            

            <a href="interests_list.php" class="btn btn-danger my-3">Cancel</a>
            <button type="submit" name="category_list_update_btn" class="btn btn-info mx-2 my-3">Update</button>
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