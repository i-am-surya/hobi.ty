<?php

include('security.php');
include('includes/header.php');
include('includes/sidebar.php');

?>

<!--DELETE MODAL -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Location ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
          
          <input type="hidden" name="delete_id" id="delete_location">
            Are you sure to delete this location ?
          </p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="location_delete_button" class="btn btn-danger">Yes</button>
        </div>
      </form> 
    </div>
  </div> 
</div>

<!-- DELETE MODAL END -->


<!-- ADD LOCATION MODAL -->

<div class="modal fade" id="locationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> District </label>
                <input type="text" name="district" class="form-control" placeholder="Enter District" autocomplete="off">
            </div>
            <div class="form-group">
                <label> State </label>
                <input type="text" name="state" class="form-control" placeholder="Enter State" autocomplete="off">
            </div>
            <div class="form-group">
                <label> Country </label>
                <input type="text" name="country" class="form-control" placeholder="Enter Country" autocomplete="off" value="India">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="location_save" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- END OF ADD LOCATION MODAL -->


<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-info">Locations 
      <button type="button" class="btn btn-info mx-2 float-right" data-toggle="modal" data-target="#locationmodal">
       Add 
      </button>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <?php

      $query = "SELECT * FROM locations";
      $query_run = mysqli_query($connection, $query);

      if(mysqli_num_rows($query_run) > 0)
      {
        ?>
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>District</th>
              <th>State</th>
              <th>Country</th>
              <th class="text-center">Edit</th>
              <th class="text-center">Delete</th>              
            </tr>
          </thead>
          <tbody>

          <?php

            while($row = mysqli_fetch_assoc($query_run))
            {
              
          ?>

            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['district']; ?></td>
              <td><?php echo $row['state']; ?></td>
              <td><?php echo $row['country']; ?></td>
              <td class="text-center">
                <form action="locations_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" class="btn btn-success" name="location_edit_btn"><i class="fas fa-edit"></i></button>
                </form>
              </td>    
              <td class="text-center">
                  <button type="button" class="btn btn-danger location_del_btn"><i class="fas fa-trash-alt"></i></button>
              </td>      
            </tr>

            <?php
              }
            ?>

          </tbody>
        </table>
        <?php
          }
          else
          {
            echo "No Record Found !";
          }
        ?>
      </div>
    </div>
  </div>



<?php

  include('includes/scripts.php');
  include('includes/footer.php');

?>

<script>

$(document).ready(function(){
  $('.location_del_btn').on('click', function(){

    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);

    $('#delete_location').val(data[0]);
  });
});

</script>