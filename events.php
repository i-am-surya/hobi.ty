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
        <h5 class="modal-title" id="exampleModalLabel">Delete Event ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
          
          <input type="hidden" name="delete_id" id="delete_event">
            Are you sure to delete this event ?
          </p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="event_delete_button" class="btn btn-danger">Yes</button>
        </div>
      </form> 
    </div>
  </div> 
</div>

<!-- DELETE MODAL END -->


<!-- ADD EVENT MODAL -->

<div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Event </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Event Name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <label>Event Type</label>
              <select name="eventtype" class="form-control">
                <option value="public"> Public </option>
                <option value="private"> Private </option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="event_save" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- END OF ADD EVENT MODAL -->


<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-info">Events 
      <button type="button" class="btn btn-info mx-2 float-right" data-toggle="modal" data-target="#eventmodal">
       Add 
      </button>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <?php

      $query = "SELECT * FROM events";
      $query_run = mysqli_query($connection, $query);

      if(mysqli_num_rows($query_run) > 0)
      {
        ?>
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Event</th>
              <th>Description</th>
              <th>Type</th>
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
              <td><?php echo $row['eventname']; ?></td>
              <td><?php echo $row['eventdescription']; ?></td>
              <td><?php echo $row['eventtype']; ?></td>
              <td class="text-center">
                <form action="events_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" class="btn btn-success" name="event_edit_btn"><i class="fas fa-edit"></i></button>
                </form>
              </td>    
              <td class="text-center">
                  <button type="button" class="btn btn-danger event_del_btn"><i class="fas fa-trash-alt"></i></button>
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
  $('.event_del_btn').on('click', function(){

    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);

    $('#delete_event').val(data[0]);
  });
});

</script>